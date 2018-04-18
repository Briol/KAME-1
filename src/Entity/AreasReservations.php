<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="AreasReservation")
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class AreasReservations
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Areas")
     * @ORM\JoinColumn(name="id_areas",referencedColumnName="id")
     */
    private $areas;

}
