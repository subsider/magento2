<?php

namespace Simplified\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

class LogTextAtCheckout implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $writer = new Stream(BP . '/var/log/test.log');
        $logger = new Logger();
        $logger->addWriter($writer);
        $logger->info('Your test message');
    }
}