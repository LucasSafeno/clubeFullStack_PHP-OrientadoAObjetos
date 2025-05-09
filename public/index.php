<?php

require "../vendor/autoload.php";

use app\classes\Crud;
use app\classes\Login;

try {

    $login = new Login();
    echo $login->auth(new Crud);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

