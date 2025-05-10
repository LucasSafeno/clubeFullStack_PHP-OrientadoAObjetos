<?php

namespace app\classes;


use app\classes\Product;

class Abajur extends Product
{
    public bool $isOn = false;

    public function execute()
    {
        return 'O produto tem o nome :  ' . $this->name;
    }
}