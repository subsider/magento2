<?php

namespace Simplified\FirstModule\Plugin;

use Magento\Catalog\Model\Product;

class ProductPlugin
{
    public function beforeSetName(Product $subject, $name)
    {
        return "Before plugin - {$name}";
    }

    public function afterGetName(Product $subject, $result)
    {
        return "{$result} - After plugin";
    }
}