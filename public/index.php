<?php

require "../vendor/autoload.php";

use app\models\Product;
use app\models\User;

$user = new User();
echo $user->all();

echo '<br />';
echo '<br />';

$product = new Product();
echo $product->all();