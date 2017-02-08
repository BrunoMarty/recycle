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
     * @ORM\Column(name="Id_Art", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ref_Art", type="integer", nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="Cat_Art", type="integer", nullable=false)
     */
    private $catArt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Taille_Art", type="integer", nullable=false)
     */
    private $tailleArt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fourn_Art", type="integer", nullable=false)
     */
    private $fournArt;


}

