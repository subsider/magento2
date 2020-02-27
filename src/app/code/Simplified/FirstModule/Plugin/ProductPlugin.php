<?php

namespace Simplified\FirstModule\Plugin;

use Magento\Catalog\Model\Product;

class ProductPlugin
{
    /**
     * @param Product $subject
     * @param $name
     * @return string
     */
    public function beforeSetName(Product $subject, $name)
    {
        return "Before plugin - {$name}";
    }

    /**
     * @param Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(Product $subject, $result)
    {
        return "{$result} - After plugin";
    }

    /**
     * @param Product $subject
     * @param callable $proceed
     * @return mixed
     */
    public function aroundGetName(Product $subject, callable $proceed)
    {
        echo 'Around get name -> Before proceed...' . '<br>';
        $name = $proceed();
        echo $name . '<br>';
        echo 'Around get name -> After proceed...' . '<br>';

        return $name;
    }

    public function aroundGetIdBySku(Product $subject, callable $proceed, $sku)
    {
        echo 'Around get id by sku -> Before proceed...' . '<br>';
        $id = $proceed($sku);
        echo $id . '<br>';
        echo 'Around get id by sku -> After proceed...' . '<br>';

        return $id;
    }
}