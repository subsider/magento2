<?php

namespace Simplified\FirstModule\Plugin;

use Magento\Catalog\Model\Product;

class ProductPlugin
{
    public function beforeSetName(Product $subject, $name)
    {
        return "Before plugin {$name}";
    }
}