<?php
namespace Vendor\MarketplaceMultiVendor\Model;

use Magento\Framework\Model\AbstractModel;

class ProductApproval extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\ProductApproval::class);
    }
}
