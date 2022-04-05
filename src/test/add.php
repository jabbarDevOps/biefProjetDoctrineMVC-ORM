<?php
require_once "../bootstrap.php";
// echo "Bonjour je suis la pour faire le teste d'jout dans la base de donnees";
require_once "../src/entities/Proprietaire.php";
$p=new Proprietaire();
$p->setNom("DIALLO");
$p->setPrenom("Abdoul Karim");
$p->setDateNaissance("now");
$p->setLieuNaissance("Gambie");
$p->setCivilite("Celibatiare");
$p->setCodePieceIdentite("yey35354");
$p->setNumeroPieceIdentite("2334jf");
$entityManager->persist($p);
$entityManager->flush();
echo "Le proprietaire a ete creer avec succees ". $p->getId();
