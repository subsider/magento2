<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\DataObject;
use Magento\Framework\Event\ManagerInterface;

class CustomEvent extends Action
{
    /**
     * @var ManagerInterface
     */
    private $eventManager;

    /**
     * CustomEvent constructor.
     * @param Context $context
     * @param ManagerInterface $eventManager
     */
    public function __construct(Context $context, ManagerInterface $eventManager)
    {
        $this->eventManager = $eventManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $message = new DataObject(['greeting' => 'Good afternoon']);
        $this->eventManager->dispatch('custom_event', ['greeting' => $message]);

        echo $message->getGreeting();
    }
}