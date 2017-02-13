<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="Categorie", indexes={@ORM\Index(name="IDX_CB8C5497D2ED65FD", columns={"Parent_Cat"})})
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
     * @var \Main\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Parent_Cat", referencedColumnName="Id_Cat")
     * })
     */
    private $parentCat;

    function getIdCat() {
        return $this->idCat;
    }

    function getNomCat() {
        return $this->nomCat;
    }

    function getParentCat(): \Main\Entity\Categorie {
        return $this->parentCat;
    }

    function setIdCat($idCat) {
        $this->idCat = $idCat;
    }

    function setNomCat($nomCat) {
        $this->nomCat = $nomCat;
    }

    function setParentCat(\Main\Entity\Categorie $parentCat) {
        $this->parentCat = $parentCat;
    }


}

