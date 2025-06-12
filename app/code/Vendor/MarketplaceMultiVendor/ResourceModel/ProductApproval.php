<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ProductApproval extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendor_marketplace_product_approval', 'entity_id');
    }
}
