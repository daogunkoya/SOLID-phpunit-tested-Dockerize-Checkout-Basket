<?php
namespace App\Features;

use App\Contracts\BasketInterface;
class RegularBasket implements BasketInterface{

  public array $products;
  public array $basket;
 
 

  public function addToBasket($item){
    if(empty($this->basket[$item])) $this->basket[] = $item;
    return;
  }
  public function fetchTotal($productList){
    $basketTotal = 0;
    if(!empty($this->basket)){
        foreach($this->basket as $itemId){
          $item = $productList[$itemId];
           $itemPrice = $item['price'];
              $basketTotal +=  $itemPrice;
        }
    }

    return $basketTotal;
  }

  public function getBasket(){
    return array_unique($this->basket);
  }
 // public function someMethod3() : string;
}