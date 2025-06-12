<?php
namespace Vendor\MarketplaceMultiVendor\Model;

use Magento\Framework\Event\ManagerInterface;
use Vendor\MarketplaceMultiVendor\Model\VendorFactory;

class VendorApproval
{
    /** @var VendorFactory */
    private $vendorFactory;

    /** @var ManagerInterface */
    private $eventManager;

    public function __construct(
        VendorFactory $vendorFactory,
        ManagerInterface $eventManager
    ) {
        $this->vendorFactory = $vendorFactory;
        $this->eventManager = $eventManager;
    }

    public function approve(Vendor $vendor)
    {
        $vendor->setData('is_approved', 1);
        $vendor->save();
        $this->eventManager->dispatch('marketplace_vendor_approved', ['vendor' => $vendor]);
    }

    public function reject(Vendor $vendor)
    {
        $vendor->setData('is_approved', 0);
        $vendor->save();
        $this->eventManager->dispatch('marketplace_vendor_rejected', ['vendor' => $vendor]);
    }
}
