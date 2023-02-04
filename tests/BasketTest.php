<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Controllers\Home;
use App\Models\product;
use App\Features\DiscountedBasket;
use App\Features\RegularBasket;
use App\Services\BasketService;

final class BasketTest extends TestCase
{


    public function testBasketInit()
    {
        $home = new Home;
        $products = new Product;
        $productList = $products->getProducts();

        $res = $home->init(8, $productList);
        
        
        $this->assertIsArray($res);
    
         $this->assertCount(2, $res);
    }


    public function testAddMethodForBasket()
    {
        $regularBasket = new RegularBasket;
    
        $regularBasket->addToBasket('P001');
        $regularBasket->addToBasket('P002');

        $this->assertEquals($regularBasket->getBasket(), ['P001', 'P002']);
        
    
    }
    public function testTotalPrice()
    {
        $regularBasket = new RegularBasket;
        $products = new Product;
        $productList = $products->getProducts();
       
        $productP001 = $productList['P001'];
        $productP002 = $productList['P002'];

        $regularBasket->addToBasket('P001');
        $regularBasket->addToBasket('P002');

        $this->assertEquals($regularBasket->fetchTotal($productList),  $productP001['price'] + $productP002['price']);
        
       
    }
   

}