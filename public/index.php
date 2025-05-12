<?php

require "../vendor/autoload.php";

class User
{

    public function __construct(public string $name, public int $age)
    {
        $this->name = $name;
        $this->age = $age;
    } // construct

    public function getUserInfo()
    {
        return $this->name . " : " . $this->age;
    }
}//? User

class User2 extends User
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }// construct
}//? User2

$user = new User2('Lucas', '30');
echo $user->getUserInfo();
