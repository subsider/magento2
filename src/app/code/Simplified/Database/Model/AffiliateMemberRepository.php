<?php

namespace Simplified\Database\Model;

use Simplified\Database\Api\AffiliateMemberRepositoryInterface;
use Simplified\Database\Api\Data\AffiliateMemberInterface;
use Simplified\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * AffiliateMemberRepository constructor.
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return AffiliateMemberInterface[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}