<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Teachers")
 * @ORM\Entity(repositoryClass="App\Repository\IntervenantRepository")
 */
class teachers
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
     * @ORM\Column(lenght=255, nullable=false)
     */
    private $teacherFirstName;

    /**
     * @ORM\Column(lenght=255, nullable=false)
     */
    private $teacherLastName;

    /**
     * @ORM\Column(lenght=255, nullable=false)
     */
    private $teacherMail;

    /**
     * @ORM\Column(lenght=255, nullable=false)
     */
    private $teacherPhone;

    /**
     * @return mixed
     */
    public function getTeacherFirstName()
    {
        return $this->teacherFirstName;
    }

    /**
     * @param mixed $teacherFirstName
     */
    public function setTeacherFirstName($teacherFirstName): void
    {
        $this->teacherFirstName = $teacherFirstName;
    }

    /**
     * @return mixed
     */
    public function getTeacherLastName()
    {
        return $this->teacherLastName;
    }

    /**
     * @param mixed $teacherLastName
     */
    public function setTeacherLastName($teacherLastName): void
    {
        $this->teacherLastName = $teacherLastName;
    }

    /**
     * @return mixed
     */
    public function getTeacherMail()
    {
        return $this->teacherMail;
    }

    /**
     * @param mixed $teacherMail
     */
    public function setTeacherMail($teacherMail): void
    {
        $this->teacherMail = $teacherMail;
    }

    /**
     * @return mixed
     */
    public function getTeacherPhone()
    {
        return $this->teacherPhone;
    }

    /**
     * @param mixed $teacherPhone
     */
    public function setTeacherPhone($teacherPhone): void
    {
        $this->teacherPhone = $teacherPhone;
    }


}
