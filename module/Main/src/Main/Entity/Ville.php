<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville")
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Ville", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVille;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Ville", type="string", length=100, nullable=false)
     */
    private $nomVille;

    function getIdVille() {
        return $this->idVille;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getNomVille() {
        return $this->nomVille;
    }

    function setIdVille($idVille) {
        $this->idVille = $idVille;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
    }


}

