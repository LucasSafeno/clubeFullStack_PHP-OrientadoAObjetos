<?php

class Login
{
    //? Propriedade
    public $email;
    public $password;

    //? Metodo

    public function auth()
    {
        return 'o meu email é ' . $this->email . ' e minha senha é ' . $this->password;
    }
}