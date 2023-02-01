<?php
namespace App;
require __DIR__ . "/vendor/autoload.php";

use App\Models\Product;
use App\Models\User;
use App\Controllers\Home;


$products = new Product;
$users = new User;
$userList = $users->getUsers();

$loggedUser = "H001";

$user = $userList[$loggedUser];
$length = $user['length']??6;

$Home = new Home;

[ $basketItem, $total ] = $Home->init($length, $products->getProducts());

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