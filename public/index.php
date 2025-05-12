<?php

require "../vendor/autoload.php";

use app\classes\User;
use app\classes\Person;


$user = new User;
echo $user->info();