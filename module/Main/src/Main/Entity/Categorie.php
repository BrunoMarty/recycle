<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="Categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Cat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Cat", type="string", length=255, nullable=false)
     */
    private $nomCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parent_Cat", type="integer", nullable=true)
     */
    private $parentCat;


}

