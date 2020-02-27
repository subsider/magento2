<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class CatalogPlugin extends Action
{
    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * CatalogPlugin constructor.
     * @param Context $context
     * @param ProductFactory $productFactory
     */
    public function __construct(Context $context, ProductFactory $productFactory)
    {
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $product = $this->productFactory->create()->load(1);
        $product->setName('iPhone 6');
        var_dump($product->getName());
    }
}