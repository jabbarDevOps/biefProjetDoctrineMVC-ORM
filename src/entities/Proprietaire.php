<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */
class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=100)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string",length=200)
     */
    private $nom;
    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;
    /**
     * @ORM\Column(type="string",length=120)
     */
    private $lieuNaissance;
    /**
     * @ORM\Column(type="string",length=20)
     */
    private $civilite;
    /**
     * @ORM\Column(type="string")
     */
    private $codePieceIdentite;
    /**
     * @ORM\Column(type="string",length=100)
     */
    private $numeroPieceIdentite;
}