<?php

namespace Simplified\Database\Model\ResourceModel\AffiliateMember;

use Magento\Catalog\Model\ResourceModel\AbstractCollection;
use Simplified\Database\Model\AffiliateMember;
use Simplified\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(AffiliateMember::class, AffiliateMemberResource::class);
        parent::_construct();
    }
}