<?php
require "../app/classes/Login.php";


$login = new Login();

//? Atribuindo valor a propriedade
$login->email = "lucas@email.com";
$login->password = "123";

//var_dump($login);


//? chamando a propriedade
// echo $login->email;

//? Chamando metodo
//echo $login->auth();


//? Transformar em obj
$user = ['name' => 'Lucas User', 'email' => 'lucas@email.com'];

$userObj = (Object) $user;

var_dump($userObj);

echo $userObj->name;


;