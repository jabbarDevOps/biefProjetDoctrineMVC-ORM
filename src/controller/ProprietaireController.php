<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller
{
    private $proprietaire;

    public function __construct()
    {
        parent::__construct();
        $this->insertion = new ProprietaireDb();
    }

    public function ajout()
    {
        $proprietaire = new Proprietaire();
        $proprietaire->setPrenom($_POST['prenom']);
        $proprietaire->setNom($_POST['nom']);
        $proprietaire->setDateNaissance($_POST['prenom']);
        $proprietaire->setLieuNaissance($_POST['lieuNaissance']);
        $proprietaire->setCivilite($_POST['civilite']);
        $proprietaire->setCodePieceIdentite($_POST['codePieceIdentite']);
        $proprietaire->setNumeroPieceIdentite($_POST['numeroPieceIdentite']);
        $this->insertion->insert($proprietaire);
        return $this->list();
    }


    public function list()
    {
        $listes = $this->insertion->findAll();
        return $this->view->load('prorieatire/create');
    }
}
