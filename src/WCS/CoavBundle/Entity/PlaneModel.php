<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 */
class PlaneModel
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var integer
     */
    private $cruiseSpeed;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $planes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->planes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return integer 
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return PlaneModel
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return integer 
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set Status
     *
     * @param string $status
     * @return PlaneModel
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get Status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Add planes
     *
     * @param \WCS\CoavBundle\Entity\Flight $planes
     * @return PlaneModel
     */
    public function addPlane(\WCS\CoavBundle\Entity\Flight $planes)
    {
        $this->planes[] = $planes;

        return $this;
    }

    /**
     * Remove planes
     *
     * @param \WCS\CoavBundle\Entity\Flight $planes
     */
    public function removePlane(\WCS\CoavBundle\Entity\Flight $planes)
    {
        $this->planes->removeElement($planes);
    }

    /**
     * Get planes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanes()
    {
        return $this->planes;
    }
    /**
     * @var \WCS\CoavBundle\Entity\Flight
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\Flight $plane
     * @return PlaneModel
     */
    public function setPlane(\WCS\CoavBundle\Entity\Flight $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\Flight 
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
