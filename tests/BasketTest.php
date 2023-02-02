<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Controllers\Home;
use App\Models\product;

final class BasketTest extends TestCase
{


    public function testAddToBasket()
    {
        $home = new Home;
        $products = new Product;
        $productList = $products->getProducts();

        $this->assertIsArray($home->init(8, $productList));
        // $this->assertContains('Avengers', $user->favorite_movies);
        // $this->assertCount(1, $user->favorite_movies);
    }

}