<?php
/**
 * Copyright © 2016 Magestore. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magestore\OrderSuccess\Model\ResourceModel\Order\Completed;

/**
 * Class Collection
 * @package Magestore\OrderSuccess\Model\ResourceModel\Sales\Completed
 */
class Collection extends \Magestore\OrderSuccess\Model\ResourceModel\Order\Collection
{
    /**
     * add condition.
     *
     * @param
     * @return $this
     */
    public function addCondition(){
        $this->addFieldToFilter('is_verified', 0);
        $this->addFieldToFilter('main_table.status', array(
                                        'in'=> array(
                                            'complete'
                                            )
                                        ))
            ;
    }

}
