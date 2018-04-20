<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EquipementReservations")
 * @ORM\Entity(repositoryClass="App\Repository\EquipementRepository")
 */
class EquipementReservations extends Entity
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

    public function getEquipementLabel()
    {
        return $this->equipementLabel;
    }

    public function setEquipementLabel($equipementLabel): void
    {
        $this->equipementLabel = $equipementLabel;
    }

    public function getEquipementStatus()
    {
        return $this->equipementStatus;
    }

    public function setEquipementStatus($equipementStatus): void
    {
        $this->equipementStatus = $equipementStatus;
    }

}
