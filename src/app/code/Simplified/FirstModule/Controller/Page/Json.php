<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Json extends Action
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    /**
     * Page constructor.
     * @param Context $context
     * @param JsonFactory $jsonFactory
     */
    public function __construct(Context $context, JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->jsonFactory->create()->setData([
            'success' => true,
            'data' => [
                'key' => 'value'
            ],
        ]);
    }
}