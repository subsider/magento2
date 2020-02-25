<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Context;

class CoreInjection extends Action
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * CoreInjection constructor.
     * @param Context $context
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(Context $context, ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        echo get_class($this->productRepository);
    }
}