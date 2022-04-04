<?php

namespace libs\system;

class View
{
    public function __construct()
    {
    }
    public function load()
    {
        //Cette varible nous permet de compter le nombre d'argument func_num_args est un varible que le langage php lui meme a defini
        $num = func_num_args(); //il returne le nombre d'argumement
        //Cette varble represente les argument qui sont passer par l'utilisateur
        $args = func_get_args();
        switch ($num) {
                //Si l'utilisateur ne passe qu'un seul argument dans la views dans ce cas c'est case 1 qui sera executer
            case 1:
                //je creer le fichier dans le views
                $file = "src/views/" . $args[0] . ".php";
                if (file_exists($file)) {
                    require_once $file;
                } else {
                    die("Le fichier n'existe pas dans le views");
                }
                break;
            case 2:
                //si l'utilisateur passe deux argments dans la views dans ce cas ces case deux qui sera executer
                $file = "src/views/" . $args[0] . ".php";
                if (file_exists($file)) {
                    $data = $args[1];
                    require_once $file;
                } else {
                    die("Le fichier n'existe pas dans le views");
                }
                break;
        }
    }
}
