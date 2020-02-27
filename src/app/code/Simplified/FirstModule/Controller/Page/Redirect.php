<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Backend\Model\View\Result\RedirectFactory;

class Redirect extends Action
{
    /**
     * @var RedirectFactory
     */
    private $redirectFactory;

    /**
     * Page constructor.
     * @param Context $context
     * @param RedirectFactory $redirectFactory
     */
    public function __construct(Context $context, RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->redirectFactory->create()->setPath('noroutefound/route/customnoroute');
    }
}