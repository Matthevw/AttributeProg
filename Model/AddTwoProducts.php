<?php

namespace M2M\AttributeProg\Model;

use \Magento\Catalog\Model\ProductFactory as ProductModel;
use \Magento\Catalog\Model\ResourceModel\Product as ProductResourceModel;
use \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollection;

class AddTwoProducts
{
    /**
     * @var ProductModel
     */
    protected $productModel;

    /**
     * @var ProductResourceModel
     */
    protected $productResourceModel;

    /**
     * @var ProductCollection
     */
    protected $productCollection;

    public function __construct(
        ProductModel $productModel,
        ProductResourceModel $productResourceModel,
        ProductCollection $productCollection,
    ) {
        $this->productModel = $productModel;
        $this->productResourceModel = $productResourceModel;
        $this->productCollection = $productCollection;
    }

    public function addProducts()
    {
        $product = $this->productModel->create();

        $product->setSku('test-item-with-attribute-2');
        $product->setName('Test item 2');
        $product->setPrice(45);
        $product->setVisibility(4);
        $product->setStatus(1);
        // $product->setData(
        //     [
        //         'customsizelabel' => 'L for tall'
        //     ]
        // );
        $product->setData('custom-size-label', 'M for size plus');

        $product->save();

        // $this->productResourceModel->save($product);
    }
}
