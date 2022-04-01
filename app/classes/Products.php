<?php

namespace App\Classes;

class Products
{

    protected $allProducts;
    protected $result = [];

    public function index()
    {
        return [
            0 => [
                'id'          => 1,
                'category_id' => 1,
                'name'        => 'White T-shirt',
                'price'       => 700,
                'description' => 'product description',
                'image'       => 'assets/img/Tshirt-1.jpeg',
            ],
            1 => [
                'id'          => 2,
                'category_id' => 1,
                'name'        => 'Black T-shirt',
                'price'       => 3500,
                'description' => 'Purpel shari description',
                'image'       => 'assets/img/tshirt-3.jpg',
            ],
            2 => [
                'id'          => 3,
                'category_id' => 2,
                'name'        => 'Red Sharee',
                'price'       => 1500,
                'description' => 'Red Sharee  description',
                'image'       => 'assets/img/s-1.png',
            ],
            3 => [
                'id'          => 4,
                'category_id' => 2,
                'name'        => 'Pink sharee',
                'price'       => 2500,
                'description' => 'pink sharee pure cotton',
                'image'       => 'assets/img/s-2.jpg',
            ],
            4 => [
                'id'          => 5,
                'category_id' => 3,
                'name'        => 'Kids white t-shirts',
                'price'       => 900,
                'description' => 'stylish kids shirt description',
                'image'       => 'assets/img/kids-1.jpeg',
            ],
            5 => [
                'id'          => 6,
                'category_id' => 3,
                'name'        => 'Kids black t-shirts',
                'price'       => 750,
                'description' => 'kids  black t-shirt description',
                'image'       => 'assets/img/kids-3.jpg',
            ],
        ];
    }
    public function shortProducts( $categoryId )
    {
        $this->allProducts = $this->index();
        foreach ( $this->allProducts as $product )
        {
            if ( $product['category_id'] == $categoryId )
            {
                array_push( $this->result, $product );
            }
        }
        return $this->result;
    }

    public function getProductDetails( $productId )
    {
        $this->allProducts = $this->index();
        foreach ( $this->allProducts as $product )
        {
            if ( $product['id'] == $productId )
            {
                return $product;
            }
        }
    }
}