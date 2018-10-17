<?php
namespace Sys\Redirecturl\Block\Adminhtml\Redirecturl\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('redirecturl_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Redirecturl Information'));
    }
}