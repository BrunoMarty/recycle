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
     * @var string
     *
     * @ORM\Column(name="Taille", type="string", length=255, nullable=false)
     */
    private $tailleArt;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=false)
     */
    private $quantity;

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

    function getCatArt(){
        return $this->catArt;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getEtat() {
        return $this->etat;
    }

    function getTailleArt() {
        return $this->tailleArt;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getFournArt(){
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

    function setCatArt($catArt) {
        $this->catArt = $catArt;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setTailleArt($tailleArt) {
        $this->tailleArt = $tailleArt;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setFournArt($fournArt) {
        $this->fournArt = $fournArt;
    }



}

