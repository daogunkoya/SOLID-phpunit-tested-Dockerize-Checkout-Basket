<?php
namespace App;
require __DIR__ . "/vendor/autoload.php";

use App\Models\Product;
use App\Models\User;
use App\Controllers\Home;

//initiate products listing
$products = new Product;

//initiate users list
$users = new User;
$userList = $users->getUsers();

$loggedUser = "H001";


//this this is the active user & loggedUser can be updated to H001 or H002 0r H003
$user = $userList[$loggedUser];
$length = $user['length']??6;

$Home = new Home;

//response with items in basket and total cost or price
[ $basketItem, $total ] = $Home->init($length, $products->getProducts());


//this is simple to print 
echo json_encode($basketItem) . "\n";
echo "total = " . json_encode($total) . "\n";


//$builder = new DI\ContainerBuilder();

// $container = new DI\Container([
//   Basket_interface::class => DI\object(Basket_interface::class)
// ]);

// $container = $builder->build();



// $Basket = $container->get(Basket_service::class);
// $container->set('Basket\Features\Basket_service', \DI\create(Basket_implementation_1::class));


// echo $Basket->add(1);