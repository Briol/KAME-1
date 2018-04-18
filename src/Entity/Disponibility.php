<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="disponibilite")
 * @ORM\Entity(repositoryClass="App\Repository\DisponibilityRepository")
 */
class Disponibility
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
     * @ORM\Column(type="boolean")
     */
    private $disponibilityStatus;

    /**
     * @ORM\Column(type="date")
     */
    private $dateReservation;

    /**
     * @ORM\Column(type="date")
     */
    private $dureeReservation;

    /**
     * @return mixed
     */
    public function getDisponibilityStatus()
    {
        return $this->disponibilityStatus;
    }

    /**
     * @param mixed $disponibilityStatus
     */
    public function setDisponibilityStatus($disponibilityStatus): void
    {
        $this->disponibilityStatus = $disponibilityStatus;
    }

    /**
     * @return mixed
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * @param mixed $dateReservation
     */
    public function setDateReservation($dateReservation): void
    {
        $this->dateReservation = $dateReservation;
    }

    /**
     * @return mixed
     */
    public function getDureeReservation()
    {
        return $this->dureeReservation;
    }

    /**
     * @param mixed $dureeReservation
     */
    public function setDureeReservation($dureeReservation): void
    {
        $this->dureeReservation = $dureeReservation;
    }

}
