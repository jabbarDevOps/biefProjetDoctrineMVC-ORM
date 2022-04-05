<?php
namespace src\controllers;
use libs\system\Controller;
use src\models\ProprietaireDAO;
class ProprietaireController extends Controller{
    public function getAll()
    {
        $p = new ProprietaireDAO();
        $test = $p->findAll();
        return $this->view->load("product/liste", $test);
    }
}




?>