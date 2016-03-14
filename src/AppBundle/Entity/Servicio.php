<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Hospitalizacion;


/**
 * Servicio
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"hospitalizacion" = "Hospitalizacion", "consulta" = "Consulta",
 *                    "urgencia" = "Urgencia", "cirugia" = "Cirugia" , 
 *                    "ambulatoria" = "CirugiaAmbulatoria" , 
 *                    "intencivos" = "CuidadosIntensivos" ,  
 *                    "cardiovascular"="Cardiovascular" , "fisioterapia"="Fisioterapia"})
 */
abstract class Servicio
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
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="entidad", type="string", length=255)
     */
    private $entidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="datetime")
     */
    private $fechaSalida;

    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="servicio")
     */
    protected $examenes;

    /**
     * @ORM\OneToMany(targetEntity="Paciente", mappedBy="servicio")
     */
    protected $pacientes;


    /**
     * @ORM\OneToMany(targetEntity="Droga", mappedBy="servicio")
     */
    protected $drogas;



    public function __construct()
    {
        $this->examenes = new ArrayCollection();
        $this->pacientes = new ArrayCollection();
        $this->drogas = new ArrayCollection();
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
     * Set tipo
     *
     * @param string $tipo
     * @return Servicio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return Servicio
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Servicio
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Servicio
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Add examene
     *
     * @param \AppBundle\Entity\Examen $examene
     *
     * @return Servicio
     */
    public function addExamene(\AppBundle\Entity\Examen $examene)
    {
        $this->examenes[] = $examene;

        return $this;
    }

    /**
     * Remove examene
     *
     * @param \AppBundle\Entity\Examen $examene
     */
    public function removeExamene(\AppBundle\Entity\Examen $examene)
    {
        $this->examenes->removeElement($examene);
    }

    /**
     * Get examenes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamenes()
    {
        return $this->examenes;
    }

    /**
     * Add paciente
     *
     * @param \AppBundle\Entity\Paciente $paciente
     *
     * @return Servicio
     */
    public function addPaciente(\AppBundle\Entity\Paciente $paciente)
    {
        $this->pacientes[] = $paciente;

        return $this;
    }

    /**
     * Remove paciente
     *
     * @param \AppBundle\Entity\Paciente $paciente
     */
    public function removePaciente(\AppBundle\Entity\Paciente $paciente)
    {
        $this->pacientes->removeElement($paciente);
    }

    /**
     * Get pacientes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPacientes()
    {
        return $this->pacientes;
    }

    /**
     * Add droga
     *
     * @param \AppBundle\Entity\Droga $droga
     *
     * @return Servicio
     */
    public function addDroga(\AppBundle\Entity\Droga $droga)
    {
        $this->drogas[] = $droga;

        return $this;
    }

    /**
     * Remove droga
     *
     * @param \AppBundle\Entity\Droga $droga
     */
    public function removeDroga(\AppBundle\Entity\Droga $droga)
    {
        $this->drogas->removeElement($droga);
    }

    /**
     * Get drogas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDrogas()
    {
        return $this->drogas;
    }
}
