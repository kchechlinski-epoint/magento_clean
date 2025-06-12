<?php
namespace Vendor\MarketplaceMultiVendor\Model;

class VendorUrlRewrite
{
    public function generateSlug($vendorName)
    {
        // Placeholder: generate URL-friendly slug
        return strtolower(preg_replace('/[^a-z0-9]+/', '-', $vendorName));
    }
}
