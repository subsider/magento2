<?php

namespace Simplified\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class GreetWhenMeet implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $message = $observer->getData('greeting');
        $message->setGreeting('Blessed be the fruit');
    }
}