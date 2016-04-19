<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Doctor extends Personal
{

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=255)
     */
    private $ci;


    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Area")
     */
    private $area;


    /**
     * Set area
     *
     * @param string $area
     * @return Doctor
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return Area 
     */
    public function getArea()
    {
        return $this->area;
    }
    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return Doctor
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    public function __toString() {
        return $this->getNombre();
    }
}
