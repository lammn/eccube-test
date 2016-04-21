<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2015 Takashi Otaki All Rights Reserved.
*
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/



namespace Plugin\ChangeItemSort;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Doctrine\Common\Collections\ArrayCollection;

class ChangeItemSortEvent
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }


    public function changeSortOrder(FilterResponseEvent $event)
    {

      $app = $this->app;
      $request = $event->getRequest();
    }

}
