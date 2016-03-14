<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enfermera
 *
 * @ORM\Table()
 * @ORM\Entity
 */
abstract class Enfermera extends Planta
{
    /**
     * @var string
     *
     * @ORM\Column(name="piso_cargo", type="string", length=255)
     */
    private $pisoCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="profesional", type="boolean")
     */
    private $profesional;


    /**
     * @ORM\OneToMany(targetEntity="Planta", mappedBy="enfermera")
     */
    protected $plantas;

    public function __construct()
    {
        $this->plantas = new ArrayCollection();
    }

    /**
     * Set pisoCargo
     *
     * @param string $pisoCargo
     * @return Enfermera
     */
    public function setPisoCargo($pisoCargo)
    {
        $this->pisoCargo = $pisoCargo;

        return $this;
    }

    /**
     * Get pisoCargo
     *
     * @return string 
     */
    public function getPisoCargo()
    {
        return $this->pisoCargo;
    }

    /**
     * Set profesional
     *
     * @param boolean $profesional
     * @return Enfermera
     */
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;

        return $this;
    }

    /**
     * Get profesional
     *
     * @return boolean 
     */
    public function getProfesional()
    {
        return $this->profesional;
    }

    /**
     * Add planta
     *
     * @param \AppBundle\Entity\Planta $planta
     *
     * @return Enfermera
     */
    public function addPlanta(\AppBundle\Entity\Planta $planta)
    {
        $this->plantas[] = $planta;

        return $this;
    }

    /**
     * Remove planta
     *
     * @param \AppBundle\Entity\Planta $planta
     */
    public function removePlanta(\AppBundle\Entity\Planta $planta)
    {
        $this->plantas->removeElement($planta);
    }

    /**
     * Get plantas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlantas()
    {
        return $this->plantas;
    }
}
