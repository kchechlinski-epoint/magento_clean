<?php
namespace Vendor\MarketplaceMultiVendor\Block\Adminhtml\Layout;

use Magento\Backend\Block\Widget\Form\Container;

class Edit extends Container
{
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_layout';
        $this->_blockGroup = 'Vendor_MarketplaceMultiVendor';
        parent::_construct();
        $this->buttonList->update('save', 'label', __('Save Layout'));
    }
}
