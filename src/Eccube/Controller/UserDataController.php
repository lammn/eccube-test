<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */


namespace Eccube\Controller;

use Eccube\Application;
use Eccube\Entity\Master\DeviceType;
use Eccube\Entity\PageLayout;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Finder\Finder;

class UserDataController
{
    public function index(Application $app, Request $request, $route)
    {
        $url_config = 'http://latia-story.com/latia_wp/wp-json/wp/v2/';
        $DeviceType = $app['orm.em']
            ->getRepository('Eccube\Entity\Master\DeviceType')
            ->find(DeviceType::DEVICE_TYPE_PC);

        $PageLayout = $app['eccube.repository.page_layout']->findOneBy(array(
            'url' => $route,
            'DeviceType' => $DeviceType,
            'edit_flg' => PageLayout::EDIT_FLG_USER,
        ));

        if (is_null($PageLayout)) {
            throw new NotFoundHttpException();
        }

        // user_dataディレクトリを探索パスに追加.
        $paths = array();
        $paths[] = $app['config']['user_data_realdir'];
        $app['twig.loader']->addLoader(new \Twig_Loader_Filesystem($paths));

        $file = $PageLayout->getFileName() . '.twig';

        $event = new EventArgs(
            array(
                'DeviceType' => $DeviceType,
                'PageLayout' => $PageLayout,
                'file' => $file,
            ),
            $request
        );
        $app['eccube.event.dispatcher']->dispatch(EccubeEvents::FRONT_USER_DATA_INDEX_INITIALIZE, $event);

        $param = array();
        if($route == 'gallery'){
            if(is_dir($app['config']['user_data_realdir'].'/gallerydir')){
                $finder = new Finder();
                $iterator = $finder
                    ->in($app['config']['user_data_realdir'].'/gallerydir') // ディレクトリを指定
                    ->name('*') // ファイル名を指定（ワイルドカードを使用できる）
                    ->files()
                    ->sortByName();

                $list = array();
                $gdates = array();
                foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
                    if(!in_array($fileinfo->getRelativePath(), $gdates)){
                        $gdates[] = $fileinfo->getRelativePath();
                    }
                    $list[$fileinfo->getRelativePath()][] = $fileinfo->getRelativePathName();
                }

                $gdates = array_reverse($gdates);
                $gdate;
                if($request->query->get('gdate')){
                    if($list[$request->query->get('gdate')]){
                        $param['galleryimg'] = array_reverse($list[$request->query->get('gdate')]);
                        $gdate = $request->query->get('gdate');
                    }else{
                        $param['galleryimg'] = array_reverse($list[$gdates[0]]);
                        $gdate = $gdates[0];
                    }
                }else{
                    $param['galleryimg'] = array_reverse($list[$gdates[0]]);
                    $gdate = $gdates[0];
                }
                
                $param['gdates'] = $gdates;
                $param['gdate'] = $gdate;
            }
        }

        if($route == 'newslist'){
            $base_url = $url_config.'posts?filter[category_name]=news&';
            $page = 1;

            if($request->query->get('page')){
                $page = (int)$request->query->get('page') ?: 1;
            }

            $per_page = 10;
            $url = $base_url.'?page='.$page.'&per_page='.$per_page;
            $arr_posts = array();
            $arr_posts = json_decode(file_get_contents($url),true);

            if(!$arr_posts){
                $page = 1;
                $url = $base_url.'?page='.$page.'&per_page='.$per_page;
                $arr_posts = json_decode(file_get_contents($url),true);
            }
            if(!$arr_posts){
                return $app->redirect($app->url('homepage'));
            }
            $posts = array();
            foreach($arr_posts as $key => $post){
                $posts[$key]['id'] = $post['id'];
                $posts[$key]['title'] = $post['title'];
                $posts[$key]['year'] = date('Y', strtotime($post['date']));
                $posts[$key]['date'] = date('m/d', strtotime($post['date']));
            }
            $param['newslist'] = $posts;

            $old_url = $base_url.'?page='.($page+1).'&per_page='.$per_page;
            if(json_decode(file_get_contents($old_url))){
                $param['isnextlist'] = 1;
            }else{
                $param['isnextlist'] = 0;
            }
            $param['pagenow'] = $page;
        }
        if($route == 'news'){
            $id = 0;
            if($request->query->get('id')){
                $id = (int)$request->query->get('id') ?: 0;
            }

            $base_url = $url_config.'posts?per_page=1';
            if($id){
                $url = $base_url.'&include='.$id;
            }else{
                $url = $base_url;
            }

            $arr_posts = array();
            $arr_posts = json_decode(file_get_contents($url),true);
            if(!$arr_posts){
                $arr_posts = json_decode(file_get_contents($base_url),true); 
            }
            if(!$arr_posts){
                return $app->redirect($app->url('homepage'));
            }
            $news = array();
            foreach($arr_posts as $key => $post){
                $news[$key]['title'] = $post['title'];
                $news[$key]['content'] = $post['content'];
                $news[$key]['date'] = date('Y m/d', strtotime($post['date']));
            }

            $param['news'] = $news;
        }

        if($route == 'shop'){
            $searchData = array();
            $qb = $app['eccube.repository.product']->getQueryBuilderBySearchData($searchData);
            $qb->orderBy('p.create_date', 'DESC');
            $pagination = $app['paginator']()->paginate(
                $qb,
                1,
                4
            );

            $param['newarrival'] = $pagination;

            $param['topics'] = $this->getTopicsImg($app);

            $date = date(time(), strtotime('-1 week'));
            
            $searchData = array();
            $qb2 = $app['eccube.repository.product']->getQueryBuilderBySearchData($searchData);
            $qb2->addSelect('COUNT(od.id) as HIDDEN ocount');
            $qb2->innerJoin('p.OrderDetail', 'od');
            $qb2->innerJoin('od.Order', 'o');
            $qb2->groupBy('p');
            $qb2->orderBy('ocount', 'DESC');
            $qb2->andWhere('o.create_date > :lastweek');
            $qb2->setParameter('lastweek', $date);
            $qb2->setMaxResults(3);
            $ranking = $app['paginator']()->paginate(
                $qb2,
                1,
                3
            );
            $param['ranking'] = $ranking;

            if(is_dir($app['config']['user_data_realdir'].'/shoptopimgdir')){
                $finder = new Finder();
                    $iterator = $finder
                        ->in($app['config']['user_data_realdir'].'/shoptopimgdir') // ディレクトリを指定
                        ->name('*') // ファイル名を指定（ワイルドカードを使用できる）
                        ->files()
                        ->sortByName();

                $list = array();
                foreach ($iterator as $fileinfo) { 
                        
                    $list[] = $fileinfo->getRelativePathName();
                }

                $param['shoptopimg'] = $list;
            }


            $searchData = array();
            $recommendCategory = 34;
            $qb3 = $app['eccube.repository.product']->getQueryBuilderBySearchData($searchData);
            $qb3->orderBy('p.create_date', 'DESC');
            $qb3
                ->andWhere($qb->expr()->in('pct.Category', ':Categories'))
                ->setParameter('Categories', $recommendCategory);

            $recommend = $app['paginator']()->paginate(
                $qb3,
                1,
                20
            );

            $param['recommend'] = $recommend;



            $monthnow = date('n');

            if(is_dir($app['config']['user_data_realdir'].'/birthstoneimgdir/'.$monthnow)){
                $finder = new Finder();
                    $iterator = $finder
                        ->in($app['config']['user_data_realdir'].'/birthstoneimgdir/'.$monthnow) // ディレクトリを指定
                        ->name('*') // ファイル名を指定（ワイルドカードを使用できる）
                        ->files()
                        ->sortByName();

                $list = array();
                foreach ($iterator as $fileinfo) { 
                        
                    $list[] = $fileinfo->getRelativePathName();
                }

                $param['birthstoneimg'] = $list;
                $param['monthnow'] = $monthnow;
            }


        }
        if($route == 'topics'){
        	if($request->query->get('id')){
          	$id = (int)$request->query->get('id') ?: 0;
          }
          
          //var_dump($id);
          
          $base_url = $url_config.'posts?per_page=1';
          if($id){
          	$url = $base_url.'&include='.$id;
          }
          else{
          	$url = $base_url;
         	}
         	
         	$param['topics'] = $this->getTopicsImg($app);
         	$searchData = array();
            $qb = $app['eccube.repository.product']->getQueryBuilderBySearchData($searchData);

            $qb
                    
                    ->andWhere($qb->expr()->in('pct.Category', ':Categories'))
                    ->setParameter('Categories', 17);
            $pagination = $app['paginator']()->paginate(
                $qb,
                (int)$request->query->get('pageno') ?: 1,
                12
            );
            $param['pagination'] = $pagination;
        }

        if($route == 'birthstone'){
            $month = 1;
            $requestmonth = (int)($request->query->get('month'));
            if($requestmonth >= 1 && $requestmonth <= 12){
                $month = $requestmonth;
            }
            $param['month'] = $month;
            $category = $month + 17;
            $searchData = array();
            $qb = $app['eccube.repository.product']->getQueryBuilderBySearchData($searchData);

            $qb
                    
                    ->andWhere($qb->expr()->in('pct.Category', ':Categories'))
                    ->setParameter('Categories', $category);
            $pagination = $app['paginator']()->paginate(
                $qb,
                (int)$request->query->get('pageno') ?: 1,
                12
            );

            $param['monthcontent'] = ' ';
            if(file_exists($app['config']['user_data_realdir'].'/birth_stone/birth_stone'.$month.'.html')){
                $param['monthcontent'] = file_get_contents($app['config']['user_data_realdir'].'/birth_stone/birth_stone'.$month.'.html');
            }
            $param['pagination'] = $pagination;
        }

        return $app->render($file,$param);
    }

    public function getTopicsImg(Application $app){
        $list = array();
        if(is_dir($app['config']['user_data_realdir'].'/topicsdir')){
            $finder = new Finder();
            $iterator = $finder
                ->in($app['config']['user_data_realdir'].'/topicsdir') // ディレクトリを指定
                ->name('*') // ファイル名を指定（ワイルドカードを使用できる）
                ->files()
                ->sortByName();
    
            foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
                $list[] = $fileinfo->getRelativePathName();
            }
            
        }

        return $list[0];
    }
}
