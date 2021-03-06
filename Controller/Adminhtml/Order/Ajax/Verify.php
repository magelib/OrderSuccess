<?php
/**
 * Copyright © 2016 Magestore. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magestore\OrderSuccess\Controller\Adminhtml\Order\Ajax;

use Magento\Sales\Model\ResourceModel\Order\CollectionFactory;

/**
 * Class UpdateTag
 * @package Magestore\OrderSuccess\Controller\Adminhtml\Order\Ajax
 */
class Verify extends \Magestore\OrderSuccess\Controller\Adminhtml\Order\OrderAction
{
    
    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        $orderId = $this->_request->getParam('order_id');
        $return = [];
        try {
            $this->orderService->verifyOrder($orderId);
            $return = ['message'=> __('The order has been verified.')];
        } catch (\Exception $e) {
            $return = [
                'message'=> $e->getMessage(),
                //'message'=> __('Can not verify the order.'),
                'error' => true,
            ];
        }   
        return $resultJson->setData($return);
    }
}