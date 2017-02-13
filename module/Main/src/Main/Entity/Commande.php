<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="Commande")
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quant_Com", type="integer", nullable=false)
     */
    private $quantCom;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Main\Entity\Client")
    * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Client_Com", referencedColumnName="Id_Client")
     * })
     */
    private $clientCom;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Main\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Art_Com", referencedColumnName="id")
     * })
     */
    private $artCom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Com", type="date", nullable=false)
     */
    private $dateCom;


}

