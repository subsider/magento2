<?php

namespace Simplified\RequestFlow\Controller\Route;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ActionFactory;

class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private $actionFactory;

    /**
     * Router constructor.
     * @param ActionFactory $actionFactory
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    public function match(RequestInterface $request)
    {
        [$module, $controller, $action] = explode('-', trim($request->getPathInfo(), '/'));
        $request->setModuleName($module)
            ->setControllerName($controller)
            ->setActionName($action);

        return $this->actionFactory->create(Forward::class, ['request' => $request]);
    }
}