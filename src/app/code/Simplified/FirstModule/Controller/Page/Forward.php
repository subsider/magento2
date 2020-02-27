<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Backend\Model\View\Result\ForwardFactory;

class Forward extends Action
{
    /**
     * @var ForwardFactory
     */
    private $forwardFactory;

    /**
     * Page constructor.
     * @param Context $context
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(Context $context, ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->forwardFactory->create()
            ->setModule('noroutefound')
            ->setController('route')
            ->forward('customnoroute');
    }
}