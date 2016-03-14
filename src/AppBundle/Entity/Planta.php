<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planta
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"doctor" = "Doctor", "enfermera" = "Enfermera" , "auxiliares"="Auxiliares"})
 */
abstract class Planta extends Personal
{

    /**
     * @ORM\ManyToOne(targetEntity="Enfermera", inversedBy="plantas")
     * @ORM\JoinColumn(name="enfermera_id", referencedColumnName="id")
     */
    protected $enfermerar;

    /**
     * @var string
     *
     * @ORM\Column(name="piso_cargo", type="string", length=255)
     */
    private $pisoCargo;
    

    /**
     * Set pisoCargo
     *
     * @param string $pisoCargo
     *
     * @return Planta
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
     * Set enfermerar
     *
     * @param \AppBundle\Entity\Enfermera $enfermerar
     *
     * @return Planta
     */
    public function setEnfermerar(\AppBundle\Entity\Enfermera $enfermerar = null)
    {
        $this->enfermerar = $enfermerar;

        return $this;
    }

    /**
     * Get enfermerar
     *
     * @return \AppBundle\Entity\Enfermera
     */
    public function getEnfermerar()
    {
        return $this->enfermerar;
    }
}
