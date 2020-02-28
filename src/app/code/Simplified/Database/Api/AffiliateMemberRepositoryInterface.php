<?php

namespace Simplified\Database\Api;

use Simplified\Database\Api\Data\AffiliateMemberInterface;

interface AffiliateMemberRepositoryInterface
{
    /**
     * @return AffiliateMemberInterface[]
     */
    public function getList();
}