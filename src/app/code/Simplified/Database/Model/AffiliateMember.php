<?php

namespace Simplified\Database\Model;

use Magento\Framework\Model\AbstractModel;
use Simplified\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }
}