<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taille
 *
 * @ORM\Table(name="Taille")
 * @ORM\Entity
 */
class Taille
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
     * @ORM\Column(name="Taille", type="string", length=4, nullable=false)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="Stock", type="integer", nullable=false)
     */
    private $stock;


    function getId() {
        return $this->id;
    }

    function getTaille() {
        return $this->taille;
    }

    function getStock() {
        return $this->stock;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }



}

