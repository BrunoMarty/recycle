<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Client", indexes={@ORM\Index(name="IDX_C0E80163CE3A9031", columns={"Ville_Client"})})
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
     * @ORM\Column(name="Password_Client", type="string", length=255, nullable=false)
     */
    private $password;
    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Client", type="string", length=100, nullable=false)
     */
    private $adresseClient;

    /**
     * @var \Main\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ville_Client", referencedColumnName="Id_Ville")
     * })
     */
    private $villeClient;

    function getIdClient() {
        return $this->idClient;
    }

    function getNomClient() {
        return $this->nomClient;
    }

    function getPrenomClient() {
        return $this->prenomClient;
    }

    function getEmailClient() {
        return $this->emailClient;
    }

    function getAdresseClient() {
        return $this->adresseClient;
    }

    function getVilleClient(){
        return $this->villeClient;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    function setPrenomClient($prenomClient) {
        $this->prenomClient = $prenomClient;
    }

    function setEmailClient($emailClient) {
        $this->emailClient = $emailClient;
    }

    function setAdresseClient($adresseClient) {
        $this->adresseClient = $adresseClient;
    }

    function setVilleClient($villeClient) {
        $this->villeClient = $villeClient;
    }

    function getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}

