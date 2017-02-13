<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="Article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Art", type="string", length=255, nullable=false)
     */
    private $refArt;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Art", type="string", length=255, nullable=false)
     */
    private $nomArt;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixA_Art", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixaArt;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixV_Art", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixvArt;

    /**
     * @var string
     *
     * @ORM\Column(name="Descript_Art", type="text", length=65535, nullable=false)
     */
    private $descriptArt;

    /**
     * @var \Main\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cat_Art", referencedColumnName="Id_Cat")
     * })
     */
    private $catArt;

    /**
     * @var float
     *
     * @ORM\Column(name="Photo", type="float", precision=10, scale=0, nullable=false)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Etat", type="integer", length=1, nullable=false)
     */
    private $etat;

    /**
     * @var \Main\Entity\Taille
     *
     * @ORM\ManyToMany(targetEntity="Main\Entity\Taille")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $tailleArt;

    /**
     * @var \Main\Entity\Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Fourn_Art", referencedColumnName="Id_Fourn")
     * })
     */
    private $fournArt;

    function getId() {
        return $this->id;
    }

    function getRefArt() {
        return $this->refArt;
    }

    function getNomArt() {
        return $this->nomArt;
    }

    function getPrixaArt() {
        return $this->prixaArt;
    }

    function getPrixvArt() {
        return $this->prixvArt;
    }

    function getDescriptArt() {
        return $this->descriptArt;
    }

    function getCatArt(): \Main\Entity\Categorie {
        return $this->catArt;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getEtat() {
        return $this->etat;
    }

    function getTailleArt(): \Main\Entity\Taille {
        return $this->tailleArt;
    }

    function getFournArt(): \Main\Entity\Fournisseur {
        return $this->fournArt;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRefArt($refArt) {
        $this->refArt = $refArt;
    }

    function setNomArt($nomArt) {
        $this->nomArt = $nomArt;
    }

    function setPrixaArt($prixaArt) {
        $this->prixaArt = $prixaArt;
    }

    function setPrixvArt($prixvArt) {
        $this->prixvArt = $prixvArt;
    }

    function setDescriptArt($descriptArt) {
        $this->descriptArt = $descriptArt;
    }

    function setCatArt(\Main\Entity\Categorie $catArt) {
        $this->catArt = $catArt;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setTailleArt(\Main\Entity\Taille $tailleArt) {
        $this->tailleArt = $tailleArt;
    }

    function setFournArt(\Main\Entity\Fournisseur $fournArt) {
        $this->fournArt = $fournArt;
    }


}

