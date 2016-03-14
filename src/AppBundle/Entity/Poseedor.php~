<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poseedor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Poseedor
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="Consultorio", inversedBy="poseedores")
     * @ORM\JoinColumn(name="consultorio_id", referencedColumnName="id")
     */
    protected $consultorio;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Poseedor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Poseedor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Poseedor
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set consultorio
     *
     * @param \AppBundle\Entity\Consultorio $consultorio
     *
     * @return Poseedor
     */
    public function setConsultorio(\AppBundle\Entity\Consultorio $consultorio = null)
    {
        $this->consultorio = $consultorio;

        return $this;
    }

    /**
     * Get consultorio
     *
     * @return \AppBundle\Entity\Consultorio
     */
    public function getConsultorio()
    {
        return $this->consultorio;
    }
}
