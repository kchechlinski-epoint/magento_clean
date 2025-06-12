<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel\Vendor;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vendor\MarketplaceMultiVendor\Model\Vendor as VendorModel;
use Vendor\MarketplaceMultiVendor\ResourceModel\Vendor as VendorResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(VendorModel::class, VendorResource::class);
    }
}
