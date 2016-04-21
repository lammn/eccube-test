<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\OrderPdf\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * HelpRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrderPdfHelpRepository extends EntityRepository
{
    /**
     * get
     *
     * @param mixed $id The identifier.
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }
}
