<?php


namespace App\Entity\Doctrine;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Airport
 * @package App\Entity\Doctrine
 * @ORM\Entity(repositoryClass="App\Repository\FlightRepository")
 */


class Flight {

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id()
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $departureAirport;

    /**
     * @ORM\Column(type="integer")
     */
    private $arrivalAirport;

    /**
     * @ORM\Column(type="datetime")
     */
    private $departureDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $arrivalDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $mainPilot;

    /**
     * Flight constructor.
     * @param $id
     * @param $departureAirport
     * @param $arrivalAirport
     * @param $departureDate
     * @param $arrivalDate
     * @param $mainPilot
     */
    public function __construct($id, $departureAirport, $arrivalAirport, $departureDate, $arrivalDate, $mainPilot)
    {
        $this->id = $id;
        $this->departureAirport = $departureAirport;
        $this->arrivalAirport = $arrivalAirport;
        $this->departureDate = $departureDate;
        $this->arrivalDate = $arrivalDate;
        $this->mainPilot = $mainPilot;
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
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * @return mixed
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return mixed
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return mixed
     */
    public function getMainPilot()
    {
        return $this->mainPilot;
    }


}