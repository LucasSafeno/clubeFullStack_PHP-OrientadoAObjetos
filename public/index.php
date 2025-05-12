<?php


require "../vendor/autoload.php";
// public - são visiveis dentro da propria classe, nas classes filhas e nas instancias das classes
// protected - são visiveis dentro da propria classe e nas classes filhas
// private - visivel somente dentro da propria classe

class Person
{
    public string $name = 'Lucas';
    protected int $age = 30;
    private $address = 'my address';


    public function walk()
    {
        return $this->name;
    }

    protected function eat()
    {
        return 'eating';
    }

    protected function fly()
    {
        return 'flying';
    }
}

class User extends Person
{
    public function teste()
    {
        return $this->name;
    }
}

// $person = new Person;
// echo $person->walk();

// echo "<br />";

// $user = new User;
// echo $user->name;