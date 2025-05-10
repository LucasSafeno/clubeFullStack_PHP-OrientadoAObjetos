<?php

namespace app\classes;


use app\classes\Product; // Ambos no mesmo namespace não precisa ser chamado pelo use

class Book extends Product
{
    public string $author;
    public int $pages;
}