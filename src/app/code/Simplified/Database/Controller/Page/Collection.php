<?php

namespace Simplified\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Simplified\Database\Model\AffiliateMemberFactory;

class Collection extends Action
{
    /**
     * @var AffiliateMemberFactory
     */
    private $affiliateMemberFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param AffiliateMemberFactory $affiliateMemberFactory
     */
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $affiliateMember = $this->affiliateMemberFactory->create();
        $collection = $affiliateMember->getCollection()
            ->addFieldToSelect(['name', 'status'])
            ->addFieldToFilter('name', [
                'eq' => 'Bob',
            ])
            ->addFieldToFilter('status', [
                'neq' => true,
            ]);

        foreach ($collection as $item) {
            var_dump($item->getData());
        }
    }
}