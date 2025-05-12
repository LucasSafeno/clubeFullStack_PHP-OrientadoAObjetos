<?php

require "../vendor/autoload.php";


class Person
{
    public static string $name = 'Lucas';

    public static function info()
    {
        return 'Person info';
    }

    public function data()
    {
        return 'data classe pai';
    }
} //* Person

class User extends Person
{
    public function teste()
    {
        // return parent::info();
        // return parent::$name;
        return parent::data();
    }
}//* User

echo (new User)->teste();