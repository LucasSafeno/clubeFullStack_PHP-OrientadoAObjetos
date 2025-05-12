<?php

require "../vendor/autoload.php";

class User
{
    public static string $name;

    public static function userInfo()
    {
        return 'Teste metodo estático';
    }
}


$myClassName = "User";

echo $myClassName::userInfo();