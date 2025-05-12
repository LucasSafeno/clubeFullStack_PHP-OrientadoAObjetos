<?php

namespace app\models;

class Product extends Model
{
    public string $table = "products";

    public function listAllProductWithDiscount()
    {
        return "Todos os produtos com descontos";
    }
}