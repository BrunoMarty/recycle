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
     * @ORM\Column(name="Id_Taille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTaille;

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


}

