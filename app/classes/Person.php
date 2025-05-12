<?php

namespace app\classes;

class Person
{

    public function __construct(public string $name, public string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }// construct()

    public function info()
    {
        return "Meu nome é {$this->name} e meu e-mail é {$this->email}";
    } // info


}// Person

