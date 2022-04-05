<?php
require_once "config/Autoloader.php";
use src\controllers\ProprietaireController;
$p=new ProprietaireController();
$p->getAll();
// echo "je suis index";




?>