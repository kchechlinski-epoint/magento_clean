<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Report extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendor_marketplace_report', 'report_id');
    }
}
