<?php

require "../vendor/autoload.php";


class Template
{
    const PATH = 'app/views';

    public function load()
    {
        return self::PATH;
    }
}

class Twig extends Template
{
    const PATH = 'app/views/twig';

    public function load()
    {
        return parent::PATH;
    }
}

// echo (new Template)->load();
// echo Template::PATH;

echo (new Twig)->load();