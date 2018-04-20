<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="groupClassroomReservation")
 * @ORM\Entity(repositoryClass="App\Repository\GroupsRepository")
 */
class GroupClassroomReservation
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
     * @ORM\Column(length=255, nullable=false)
     */
    private $groupName;

    /**
     * @ORM\Column(type="smallint")
     */
    private $nbStudent;

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setGroupName($groupName): void
    {
        $this->groupName = $groupName;
    }

    public function getNbStudent()
    {
        return $this->nbStudent;
    }

    public function setNbStudent($nbStudent): void
    {
        $this->nbStudent = $nbStudent;
    }

}
