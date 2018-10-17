<?php

namespace Sys\Redirecturl\Model\ResourceModel\Redirecturl;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sys\Redirecturl\Model\Redirecturl', 'Sys\Redirecturl\Model\ResourceModel\Redirecturl');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>