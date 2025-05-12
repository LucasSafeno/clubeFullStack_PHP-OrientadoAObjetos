<?php

require "../vendor/autoload.php";

use app\classes\Person;


$person = new Person('Lucas', "lucas@email.com");


echo $person->info();