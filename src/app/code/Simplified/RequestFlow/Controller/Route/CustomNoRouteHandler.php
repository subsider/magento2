<?php

namespace Simplified\RequestFlow\Controller\Route;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Router\NoRouteHandlerInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{
    public function process(RequestInterface $request)
    {
        $request->setRouteName('noroutefound')
            ->setControllerName('route')
            ->setActionName('customnoroute');

        return true;
    }
}