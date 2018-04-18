<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Areas")
 * @ORM\Entity(repositoryClass="App\Repository\SalleRepository")
 */
class Areas
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
     * @ORM\Column(lenght=25, nullable=false)
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

    /**
     * @return mixed
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * @param mixed $nomSalle
     */
    public function setNomSalle($nomSalle): void
    {
        $this->nomSalle = $nomSalle;
    }

    /**
     * @return mixed
     */
    public function getCapacitySalleDebout()
    {
        return $this->capacitySalleDebout;
    }

    /**
     * @param mixed $capacitySalleDebout
     */
    public function setCapacitySalleDebout($capacitySalleDebout): void
    {
        $this->capacitySalleDebout = $capacitySalleDebout;
    }

    /**
     * @return mixed
     */
    public function getCapacitySalleAssis()
    {
        return $this->capacitySalleAssis;
    }

    /**
     * @param mixed $capacitySalleAssis
     */
    public function setCapacitySalleAssis($capacitySalleAssis): void
    {
        $this->capacitySalleAssis = $capacitySalleAssis;
    }

    /**
     * @return mixed
     */
    public function getCapacitySalleHandicap()
    {
        return $this->capacitySalleHandicap;
    }

    /**
     * @param mixed $capacitySalleHandicap
     */
    public function setCapacitySalleHandicap($capacitySalleHandicap): void
    {
        $this->capacitySalleHandicap = $capacitySalleHandicap;
    }


}
