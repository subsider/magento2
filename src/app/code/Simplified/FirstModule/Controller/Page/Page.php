<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Page extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Page constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}