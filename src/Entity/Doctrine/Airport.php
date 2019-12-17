<?php


namespace App\Entity\Doctrine;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Airport
 * @package App\Entity\Doctrine
 * @ORM\Entity(repositoryClass="App\Repository\AirportRepository")
 */
class Airport {

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id()
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=5)
     */
    private $code;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * Airport constructor.
     * @param $id
     * @param $code
     * @param $name
     */
    public function __construct($id, $code, $name)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}