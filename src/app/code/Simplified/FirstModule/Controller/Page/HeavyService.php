<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

use Magento\Framework\App\Request\Http;
use Simplified\FirstModule\Model\HeavyService as HeavyServiceModel;

class HeavyService extends Action
{
    /**
     * @var HeavyServiceModel
     */
    private $heavyService;

    /**
     * @var Http
     */
    private $http;

    /**
     * HeavyService constructor.
     * @param Context $context
     * @param HeavyServiceModel $heavyService
     * @param Http $http
     */
    public function __construct(Context $context, HeavyServiceModel $heavyService, Http $http)
    {
        parent::__construct($context);
        $this->heavyService = $heavyService;
        $this->http = $http;
    }

    public function execute()
    {
        $id = $this->http->getParam('id', 0);

        if ($id == 1) {
            $this->heavyService->printMessage();
        } else {
            echo 'Heavy service not used';
        }
    }
}