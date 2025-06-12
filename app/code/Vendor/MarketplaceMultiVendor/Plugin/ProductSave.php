<?php
namespace Vendor\MarketplaceMultiVendor\Plugin;

use Magento\Catalog\Model\Product;

class ProductSave
{
    public function beforeSave(Product $subject)
    {
        // Placeholder: enforce vendor assignment
    }
}
