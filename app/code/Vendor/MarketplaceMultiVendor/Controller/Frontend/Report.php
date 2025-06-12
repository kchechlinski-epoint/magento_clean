<?php
namespace Vendor\MarketplaceMultiVendor\Controller\Frontend;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RedirectFactory;
use Vendor\MarketplaceMultiVendor\Model\ReportFactory;

class Report extends Action
{
    /** @var RedirectFactory */
    private $redirectFactory;

    /** @var ReportFactory */
    private $reportFactory;

    public function __construct(
        Context $context,
        RedirectFactory $redirectFactory,
        ReportFactory $reportFactory
    ) {
        parent::__construct($context);
        $this->redirectFactory = $redirectFactory;
        $this->reportFactory = $reportFactory;
    }

    public function execute()
    {
        // Placeholder: save report data from POST request
        $result = $this->redirectFactory->create();
        $result->setPath('*/*/index');
        return $result;
    }
}
