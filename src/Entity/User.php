<?php

namespace App\Entity;

use DateTime;

class User {
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
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    private $id;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $updatedAt;

    /**
     * User constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $birthDate
     * @param $updatedAt
     */
    public function __construct(int $id, string $firstName, string $lastName,   DateTime $birthDate, DateTime $updatedAt) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->updatedAt = $updatedAt;
    }
}