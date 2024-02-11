<?php 

include '../vendor/autoload.php';

require_once '../config.php';

use App\Cart;

$cart = new Cart($conn);
dd($cart->getByID(1));