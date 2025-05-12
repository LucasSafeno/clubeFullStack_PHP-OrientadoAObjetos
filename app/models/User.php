<?php

namespace app\models;

class User extends Model
{
    public string $table = "users";
    public function allUserIsAdmin()
    {
        return "Listando todos os admins";
    }
}