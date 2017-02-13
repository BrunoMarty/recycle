<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="Fournisseur", indexes={@ORM\Index(name="IDX_B00245E5CE3A9031", columns={"Ville_Client"})})
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
     * @var \Main\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ville_Client", referencedColumnName="Id_Ville")
     * })
     */
    private $villeClient;


}

