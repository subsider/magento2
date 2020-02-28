<?php

namespace Simplified\Database\Model;

use Magento\Framework\Exception\AlreadyExistsException;
use Simplified\Database\Api\AffiliateMemberRepositoryInterface;
use Simplified\Database\Api\Data\AffiliateMemberInterface;
use Simplified\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;
use Simplified\Database\Model\AffiliateMemberFactory;
use Simplified\Database\Model\ResourceModel\AffiliateMember;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var AffiliateMemberFactory
     */
    private $affiliateMemberFactory;

    /**
     * @var AffiliateMember
     */
    private $affiliateMember;

    /**
     * AffiliateMemberRepository constructor.
     * @param CollectionFactory $collectionFactory
     * @param AffiliateMemberFactory $affiliateMemberFactory
     * @param AffiliateMember $affiliateMember
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMember $affiliateMember
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMember = $affiliateMember;
    }

    /**
     * @return AffiliateMemberInterface[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return AffiliateMemberInterface
     */
    public function getAffiliateMemberById(int $id)
    {
        $affiliateMember = $this->affiliateMemberFactory->create();

        return $affiliateMember->load($id);
    }

    /**
     * @param AffiliateMemberInterface $member
     * @return AffiliateMemberInterface
     * @throws AlreadyExistsException
     */
    public function saveAffiliateMember(AffiliateMemberInterface $member)
    {
        $this->affiliateMember->save($member);
        return $member;
    }

    /**
     * @param AffiliateMemberInterface $member
     * @param int $id
     * @return AffiliateMemberInterface|string
     */
    public function updateAffiliateMember(AffiliateMemberInterface $member, int $id)
    {
        $updatedMember = $this->affiliateMemberFactory->create()->load($id);

        if ($updatedMember->getId() != null) {
            foreach ($member->getData() as $key => $value) {
                $updatedMember->setData($key, $value);
            }

            $updatedMember->save();

            return $updatedMember;
        }
    }
}