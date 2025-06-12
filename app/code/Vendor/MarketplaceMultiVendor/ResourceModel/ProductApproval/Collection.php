<?php
namespace Vendor\MarketplaceMultiVendor\ResourceModel\ProductApproval;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vendor\MarketplaceMultiVendor\Model\ProductApproval as ApprovalModel;
use Vendor\MarketplaceMultiVendor\ResourceModel\ProductApproval as ApprovalResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(ApprovalModel::class, ApprovalResource::class);
    }
}
