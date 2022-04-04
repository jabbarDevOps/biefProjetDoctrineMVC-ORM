<?php

namespace libs\system;
//Nous avons besoin d'inclure la view dans le controller;
use libs\system\View;

class Controller
{
    protected $view;
    public function __construct()
    {
        //Toute classe qui va heriter cette class aura l'objet view avec lui
        $this->view = new View();
    }
}
