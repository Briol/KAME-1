<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Areas")
 * @ORM\Entity(repositoryClass="App\Repository\SalleRepository")
 */
class Areas extends Entity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(length=25, nullable=false)
     */
    private $nomSalle;

    /**
     * @ORM\Column(type="smallint")
     */
    private $capacitySalleDebout;

    /**
     * @ORM\Column(type="smallint")
     */
    private $capacitySalleAssis;

    /**
     * @ORM\Column(type="smallint")
     */
    private $capacitySalleHandicap;

    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    public function setNomSalle($nomSalle): void
    {
        $this->nomSalle = $nomSalle;
    }

    public function getCapacitySalleDebout()
    {
        return $this->capacitySalleDebout;
    }

    public function setCapacitySalleDebout($capacitySalleDebout): void
    {
        $this->capacitySalleDebout = $capacitySalleDebout;
    }

    public function getCapacitySalleAssis()
    {
        return $this->capacitySalleAssis;
    }

    public function setCapacitySalleAssis($capacitySalleAssis): void
    {
        $this->capacitySalleAssis = $capacitySalleAssis;
    }

    public function getCapacitySalleHandicap()
    {
        return $this->capacitySalleHandicap;
    }

    public function setCapacitySalleHandicap($capacitySalleHandicap): void
    {
        $this->capacitySalleHandicap = $capacitySalleHandicap;
    }


}
