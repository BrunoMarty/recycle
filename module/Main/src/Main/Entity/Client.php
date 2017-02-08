<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Client", type="string", length=30, nullable=false)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Client", type="string", length=30, nullable=false)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_Client", type="string", length=30, nullable=false)
     */
    private $emailClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Client", type="string", length=100, nullable=false)
     */
    private $adresseClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ville_Client", type="integer", nullable=false)
     */
    private $villeClient;


}

