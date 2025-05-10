<?php
header("Content-type:application/json");
require "../vendor/autoload.php";

use app\classes\Book;
use app\classes\Abajur;

// $book = new Book();
// $book->name = "Meu Livro";
// $book->description = "Quis sunt sit ut ea culpa elit.";
// $book->author = "Lucas Tenorio";
// $book->pages = 300;

// echo json_encode($book);

$abajur = new Abajur();
$abajur->name = "Abajur";
$abajur->description = "Quis ad ex qui est laborum cupidatat cupidatat incididunt ex qui ea cillum irure.";
$abajur->isOn = true;


echo json_encode($abajur->execute());