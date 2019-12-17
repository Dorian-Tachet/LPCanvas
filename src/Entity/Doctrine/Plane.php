<?php


namespace App\Entity\Doctrine;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Plane
 * @package App\Entity\Doctrine
 * @ORM\Entity(repositoryClass="App\Repository\PlaneRepository")
 */

class Plane {

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id()
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $model;
    /**
     * @ORM\Column(type="string", length=5)
     */
    private $code;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $manufacturer;

    /**
     * Plane constructor.
     */
    public function __construct() {

    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @param mixed $manufacturer
     */
    public function setManufacturer($manufacturer): void
    {
        $this->manufacturer = $manufacturer;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


}