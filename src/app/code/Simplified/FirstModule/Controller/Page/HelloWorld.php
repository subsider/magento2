<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;

class HelloWorld extends Action
{
    public function execute()
    {
        echo 'Hello world';
    }
}