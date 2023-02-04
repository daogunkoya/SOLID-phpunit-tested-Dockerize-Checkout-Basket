<?php
namespace App\Services;

use App\Contracts\BasketInterface;

use App\Models\Product;




class BasketService{
    public $feature;
    public array $basket;
    public $productList;

    public function __construct(BasketInterface $BasketImplementation, $products){
        $this->feature =  new $BasketImplementation;
        $this->productList = $products;
    }

    public function addToBasket($value){

        return $this->feature->addToBasket($value);
    }

    public function fetchTotal(){
        return $this->feature->fetchTotal($this->productList);
    }
    public function getBasket():array {
        return $this->feature->getBasket();
    }

}