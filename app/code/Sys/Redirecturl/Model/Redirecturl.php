<?php
namespace Sys\Redirecturl\Model;

class Redirecturl extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sys\Redirecturl\Model\ResourceModel\Redirecturl');
    }
}
?>