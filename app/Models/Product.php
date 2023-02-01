<?php
namespace App\Models;
class Product
{


    public array $products;

    public function __construct()
    {

        $this->products = [
            "P001" => ["id" => 'P001', "name" => "Photography", "price" => 200],
            "P002" => ["id" => 'P002', "name" => "FloorPlan", "price" => 100],
            "P003" => ["id" => 'P003', "name" => "Gas Certificate", "price" => 83.50],
            "P004" => ["id" => 'P004', "name" => "EICR Certificate", "price" => 51.00],

        ];
    }

    public function getProducts(): array
    {

        return $this->products;
    }
}