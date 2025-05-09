<?php
// require "../helpers/autoload.php";
require "../vendor/autoload.php";

use app\classes\Crud;
use app\classes\Login;

$login = new Login();
$crud = new Crud();

//? Atribuindo valor a propriedade
$login->email = "lucas@email.com";
$login->password = "123";

//var_dump($login);

echo helper();

echo "<br>";
echo "<br>";

//? chamando a propriedade
// echo $login->email;

//? Chamando metodo
//echo $login->auth();
echo $crud->read();

//? Transformar em obj
$user = ['name' => 'Lucas User', 'email' => 'lucas@email.com'];

$userObj = (Object) $user;

var_dump($userObj);

echo $userObj->name;



;