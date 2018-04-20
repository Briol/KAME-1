<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Teachers")
 * @ORM\Entity(repositoryClass="App\Repository\IntervenantRepository")
 */
class teachers extends Entity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(length=255, nullable=false)
     */
    private $teacherFirstName;

    /**
     * @ORM\Column(length=255, nullable=false)
     */
    private $teacherLastName;

    /**
     * @ORM\Column(length=255, nullable=false)
     */
    private $teacherMail;

    /**
     * @ORM\Column(length=255, nullable=false)
     */
    private $teacherPhone;


    public function getId()
    {
        return $this->id;
    }

    public function getTeacherFirstName()
    {
        return $this->teacherFirstName;
    }

    public function setTeacherFirstName($teacherFirstName): void
    {
        $this->teacherFirstName = $teacherFirstName;
    }

    public function getTeacherLastName()
    {
        return $this->teacherLastName;
    }

    public function setTeacherLastName($teacherLastName): void
    {
        $this->teacherLastName = $teacherLastName;
    }

    public function getTeacherMail()
    {
        return $this->teacherMail;
    }

    public function setTeacherMail($teacherMail): void
    {
        $this->teacherMail = $teacherMail;
    }

    public function getTeacherPhone()
    {
        return $this->teacherPhone;
    }

    public function setTeacherPhone($teacherPhone): void
    {
        $this->teacherPhone = $teacherPhone;
    }


}
