<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="AreasReservation")
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class AreasReservations extends Entity
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\teacher")
     * @ORM\JoinColumn(name="id_teaacher",referencedColumnName="id")
     */
    private $teacher;

}
