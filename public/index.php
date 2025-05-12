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


User::$name = 'Lucas';

echo User::userInfo();
echo "<br />";
echo User::$name;