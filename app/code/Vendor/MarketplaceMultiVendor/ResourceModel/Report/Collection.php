<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel\Report;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vendor\MarketplaceMultiVendor\Model\Report as ReportModel;
use Vendor\MarketplaceMultiVendor\ResourceModel\Report as ReportResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(ReportModel::class, ReportResource::class);
    }
}
