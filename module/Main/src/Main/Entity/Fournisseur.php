<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="Fournisseur")
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Fourn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFourn;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Fourn", type="string", length=255, nullable=false)
     */
    private $nomFourn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ville_Fourn", type="integer", nullable=false)
     */
    private $villeFourn;


}

