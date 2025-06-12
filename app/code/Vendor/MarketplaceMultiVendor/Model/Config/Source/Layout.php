<?php
namespace Vendor\MarketplaceMultiVendor\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Layout implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'grid', 'label' => __('Grid')],
            ['value' => 'masonry', 'label' => __('Masonry')],
            ['value' => 'list', 'label' => __('List')],
        ];
    }
}
