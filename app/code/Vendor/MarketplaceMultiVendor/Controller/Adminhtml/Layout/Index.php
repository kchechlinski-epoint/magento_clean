<?php
namespace Vendor\MarketplaceMultiVendor\Controller\Adminhtml\Layout;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    const ADMIN_RESOURCE = 'Vendor_MarketplaceMultiVendor::config';

    /** @var PageFactory */
    private $resultPageFactory;

    public function __construct(Action\Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Vendor_MarketplaceMultiVendor::marketplace_root');
        $resultPage->getConfig()->getTitle()->prepend(__('Marketplace Layout'));
        return $resultPage;
    }
}
