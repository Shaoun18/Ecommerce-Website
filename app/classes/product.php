<?php

namespace App\classes;

class product
{
    public $product;
    public $data = [];

    public function getAllProduct()
    {
        $this->product = [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => 'iphone 13',
                'price' => '98000',
                'image' => 'iphone.jpg',
                'tittle' => 'iphone'
            ],
            1 => [
                'id' => 2,
                'category_id' => 2,
                'name' => 'TShirt',
                'price' => '500',
                'image' => 'tshirt.jpg',
                'tittle' => 'TShirt'
            ],

            2 => [
                'id' => 3,
                'category_id' => 3,
                'name' => 'New Shari',
                'price' => '2500',
                'image' => 'shari.jpg',
                'tittle' => 'New Shari'
            ],

            3 => [
                'id' => 4,
                'category_id' => 4,
                'name' => 'New Car',
                'price' => '345500',
                'image' => 'car.jpg',
                'tittle' => 'New Car'
            ],
        ];
        return $this->product;
    }
    public function getproductbyid($id){
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function getproductcategorybyid($id){
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if ($product['category_id'] == $id){
                array_push($this->data,$product);
            }
        }
        return $this->data;
    }
}