<?php

namespace app\classes;

class Crud
{
    public $field = 'teste';
    public function read()
    {
        var_dump($this->field);
    }
}