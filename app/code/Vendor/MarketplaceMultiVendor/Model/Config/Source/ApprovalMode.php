<?php
namespace Vendor\MarketplaceMultiVendor\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class ApprovalMode implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'auto', 'label' => __('Automatic')],
            ['value' => 'manual', 'label' => __('Manual')],
        ];
    }
}
