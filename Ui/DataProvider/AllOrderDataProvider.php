<?php
/**
 * Copyright © 2016 Magestore. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magestore\OrderSuccess\Ui\DataProvider;

/**
 * Class NeedVerifyDataProvider
 * @package Magestore\OrderSuccess\Ui\DataProvider
 */
class AllOrderDataProvider extends \Magestore\OrderSuccess\Ui\DataProvider\OrderDataProvider
{
    /**
     * {@inheritdoc}
     */
    public function getOrderCollection()
    {
        /** @var Collection $collection */
        $collection= $this->context->getAllOrderCollectionFactory()->create();
        return $collection;
    }
    
}
