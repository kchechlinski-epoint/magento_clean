<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Vendor extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendor_marketplace_vendor', 'vendor_id');
    }
}
