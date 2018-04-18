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
     * @ORM\Column(lenght=255, nullable=false-t
     *    )
     */
    private $groupName;

    /**
     * @ORM\Column(type="smallint")
     */
    private $nbStudent;

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     */
    public function setGroupName($groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * @return mixed
     */
    public function getNbStudent()
    {
        return $this->nbStudent;
    }

    /**
     * @param mixed $nbStudent
     */
    public function setNbStudent($nbStudent): void
    {
        $this->nbStudent = $nbStudent;
    }

}
