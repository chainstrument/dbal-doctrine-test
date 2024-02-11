<?php 

include '../vendor/autoload.php';

require_once '../config.php';

use App\Cart;

$cart = new Cart($conn);
//dd($cart->getByID(1)); 

$cart = $cart->getByID(1);

foreach ($cart as $elem)
{
    echo $elem['last_modified'];
}