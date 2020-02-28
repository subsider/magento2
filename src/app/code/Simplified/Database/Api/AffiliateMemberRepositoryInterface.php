<?php

namespace Simplified\Database\Api;

use Simplified\Database\Api\Data\AffiliateMemberInterface;

interface AffiliateMemberRepositoryInterface
{
    /**
     * @return AffiliateMemberInterface[]
     */
    public function getList();

    /**
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function getAffiliateMemberById(int $id);

    /**
     * @param AffiliateMemberInterface $member
     * @return AffiliateMemberInterface
     */
    public function saveAffiliateMember(AffiliateMemberInterface $member);

    /**
     * @param AffiliateMemberInterface $member
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function updateAffiliateMember(AffiliateMemberInterface $member, int $id);
}