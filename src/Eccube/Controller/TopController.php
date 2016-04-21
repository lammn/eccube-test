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
use Symfony\Component\Finder\Finder;

class TopController
{

    public function index(Application $app)
    {
    	$param = array();

      $url_config = 'http://latia-story.com/latia_wp/wp-json/wp/v2/';


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
                    $list[] = $fileinfo->getRelativePathName();
                }


                $param['galleryimg'] = array_pop($list);
        }

    		$url = $url_config.'posts?filter[category_name]=news';

    		$arr_posts = array();
        $arr_posts = json_decode(file_get_contents($url),true);


        $news = array();
        $parent_ids = array();
        foreach($arr_posts as $key => $post){
            $news[$post['id']]['title'] = $post['title']['rendered'];
            $parent_ids[$post['id']] = $post['id'];
        }
        $media_url = $url_config.'media?parent='.implode(',', $parent_ids);
        $arr_medias = array();
        $arr_medias = json_decode(file_get_contents($media_url),true);
        $medias = array();
        foreach($arr_medias as $media){
        	if(!isset($news[$media['post']]['media'])){
        		$news[$media['post']]['media'] = $media['guid']['rendered'];
        		$news[$media['post']]['id'] = $media['post'];
        	}
        }
        $news = array_merge($news);

        $param['news'] = $news;

        if(is_dir($app['config']['user_data_realdir'].'/topimgdir')){
                $finder = new Finder();
                    $iterator = $finder
                        ->in($app['config']['user_data_realdir'].'/topimgdir') // ディレクトリを指定
                        ->name('*') // ファイル名を指定（ワイルドカードを使用できる）
                        ->files()
                        ->sortByName();

                $list = array();
                foreach ($iterator as $fileinfo) {

                    $list[] = $fileinfo->getRelativePathName();
                }

                $param['topimg'] = $list;
            }

        return $app->render('index.twig', $param);
    }



}
