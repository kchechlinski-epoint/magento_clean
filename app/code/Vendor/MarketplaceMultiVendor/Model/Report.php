<?php
namespace Vendor\MarketplaceMultiVendor\Model;

use Magento\Framework\Model\AbstractModel;

class Report extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Report::class);
    }
}
