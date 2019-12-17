<?php


namespace App\Entity\Doctrine;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Pilot
 * @package App\Entity\Doctrine
 * @ORM\Entity(repositoryClass="App\Repository\PilotRepository")
 */
class Pilot {
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id()
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;
    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;
    /**
     * @ORM\Column(type="datetime")
     */
    private $hiringDate;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * Pilot constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $birthDate
     * @param $hiringDate
     * @param $updatedAt
     * @param $createdAt
     */
    public function __construct($id, $firstName, $lastName, $birthDate, $hiringDate, $updatedAt, $createdAt)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->hiringDate = $hiringDate;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return mixed
     */
    public function getHiringDate()
    {
        return $this->hiringDate;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }



}