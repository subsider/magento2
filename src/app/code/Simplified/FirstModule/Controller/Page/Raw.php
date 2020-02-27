<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Raw as RawResult;

class Raw extends Action
{
    /**
     * @var RawResult
     */
    private $raw;

    /**
     * Page constructor.
     * @param Context $context
     * @param RawResult $raw
     */
    public function __construct(Context $context, RawResult $raw)
    {
        $this->raw = $raw;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->raw->setContents('Hello from raw');
    }
}