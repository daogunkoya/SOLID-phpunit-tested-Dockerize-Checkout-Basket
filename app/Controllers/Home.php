<?php

namespace App\Controllers;


use App\Features\DiscountedBasket;
use App\Features\RegularBasket;
use App\Services\BasketService;

class Home
{

    public function init(int $length, array $products)
    {


        switch ($length) {
            case $length < 12:
                $basketFeature = new RegularBasket;
                break;
            case $length >= 12:
                $basketFeature = new DiscountedBasket;
                break;
            default:
                $basketFeature = new RegularBasket;

        }



        $service = new BasketService($basketFeature, $products);

                $service->addToBasket('P001');
                $service->addToBasket('P002');
                $service->addToBasket('P003');
                $service->addToBasket('P004');
                $service->addToBasket('P004');
                $service->addToBasket('P004');

       
                return [ $service->getBasket(), $service->fetchTotal() ];

       
    }
}