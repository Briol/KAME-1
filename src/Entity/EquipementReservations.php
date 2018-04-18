<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="EquipementReservations")
 * @ORM\Entity(repositoryClass="App\Repository\EquipementRepository")
 */
class EquipementReservations
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
     * @ORM\Column(type="smallint")
     */
    private $equipementLabel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $equipementStatus;

    /**
     * @return mixed
     */
    public function getEquipementLabel()
    {
        return $this->equipementLabel;
    }

    /**
     * @param mixed $equipementLabel
     */
    public function setEquipementLabel($equipementLabel): void
    {
        $this->equipementLabel = $equipementLabel;
    }

    /**
     * @return mixed
     */
    public function getEquipementStatus()
    {
        return $this->equipementStatus;
    }

    /**
     * @param mixed $equipementStatus
     */
    public function setEquipementStatus($equipementStatus): void
    {
        $this->equipementStatus = $equipementStatus;
    }

}
