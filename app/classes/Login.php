<?php
namespace app\classes;
class Login
{
    //? Propriedade
    public $email;
    public $password;

    //? Metodo

    public function auth()
    {
        return 'O meu email é ' . $this->email . ' e minha senha é ' . $this->password;
    }
}