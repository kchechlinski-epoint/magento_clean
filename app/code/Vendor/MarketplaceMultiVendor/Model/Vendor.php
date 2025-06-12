<?php
namespace Vendor\MarketplaceMultiVendor\Model;

use Magento\Framework\Model\AbstractModel;

class Vendor extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Vendor::class);
    }
}
