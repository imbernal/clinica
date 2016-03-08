<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfermera
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Enfermera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
}
