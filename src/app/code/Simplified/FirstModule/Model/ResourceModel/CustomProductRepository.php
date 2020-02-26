<?php

namespace Simplified\FirstModule\Model\ResourceModel;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class CustomProductRepository implements ProductRepositoryInterface
{
    /**
     * Create product
     *
     * @param ProductInterface $product
     * @param bool $saveOptions
     * @return void
     */
    public function save(ProductInterface $product, $saveOptions = false)
    {
    }

    /**
     * Get info about product by product SKU
     *
     * @param string $sku
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return void
     */
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {

    }

    /**
     * Get info about product by product id
     *
     * @param int $productId
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return void
     */
    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {

    }

    /**
     * Delete product
     *
     * @param ProductInterface $product
     * @return void Will returned True if deleted
     */
    public function delete(ProductInterface $product)
    {

    }

    /**
     * @param string $sku
     * @return void Will returned True if deleted
     */
    public function deleteById($sku)
    {

    }

    /**
     * Get product list
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return void
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {

    }
}