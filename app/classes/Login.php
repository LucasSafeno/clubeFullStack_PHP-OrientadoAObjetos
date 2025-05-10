<?php
namespace app\classes;
class Login
{
    //? Propriedade
    // public string $email;
    // public string $password;

    //? Metodos

    public function auth(Crud $crud): string
    {
        return $crud->delete();
    }
}