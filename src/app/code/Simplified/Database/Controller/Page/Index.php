<?php

namespace Simplified\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Simplified\Database\Model\AffiliateMemberFactory;

class Index extends Action
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
        var_dump($affiliateMember->load(3)->getData());
    }
}