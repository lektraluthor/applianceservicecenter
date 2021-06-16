<?php

namespace App\Components;

class Controller
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }
}