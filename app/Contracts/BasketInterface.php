<?php
namespace App\Contracts;

interface BasketInterface {


  
  public function addToBasket($user_object);
  public function fetchTotal($ProductList);
  public function getBasket();

 // public function someMethod3() : string;
}