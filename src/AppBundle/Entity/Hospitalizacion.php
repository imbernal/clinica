<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospitalizacion
 *
 * @ORM\Entity
 */
class Hospitalizacion extends Servicio
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="valor_habitacion", type="string", length=255)
     */
    private $valorHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_dias", type="string", length=255)
     */
    private $numeroDias;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_restaurante", type="string", length=255)
     */
    private $valorRestaurante;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_varios", type="string", length=255)
     */
    private $valorVarios;

    /**
     * @var string
     *
     * @ORM\Column(name="num_visitas", type="string", length=255)
     */
    private $numVisitas;



    /**
     * Set valorHabitacion
     *
     * @param string $valorHabitacion
     * @return Hospitalizacion
     */
    public function setValorHabitacion($valorHabitacion)
    {
        $this->valorHabitacion = $valorHabitacion;

        return $this;
    }

    /**
     * Get valorHabitacion
     *
     * @return string 
     */
    public function getValorHabitacion()
    {
        return $this->valorHabitacion;
    }

    /**
     * Set numeroDias
     *
     * @param string $numeroDias
     * @return Hospitalizacion
     */
    public function setNumeroDias($numeroDias)
    {
        $this->numeroDias = $numeroDias;

        return $this;
    }

    /**
     * Get numeroDias
     *
     * @return string 
     */
    public function getNumeroDias()
    {
        return $this->numeroDias;
    }

    /**
     * Set valorRestaurante
     *
     * @param string $valorRestaurante
     * @return Hospitalizacion
     */
    public function setValorRestaurante($valorRestaurante)
    {
        $this->valorRestaurante = $valorRestaurante;

        return $this;
    }

    /**
     * Get valorRestaurante
     *
     * @return string 
     */
    public function getValorRestaurante()
    {
        return $this->valorRestaurante;
    }

    /**
     * Set valorVarios
     *
     * @param string $valorVarios
     * @return Hospitalizacion
     */
    public function setValorVarios($valorVarios)
    {
        $this->valorVarios = $valorVarios;

        return $this;
    }

    /**
     * Get valorVarios
     *
     * @return string 
     */
    public function getValorVarios()
    {
        return $this->valorVarios;
    }

    /**
     * Set numVisitas
     *
     * @param string $numVisitas
     * @return Hospitalizacion
     */
    public function setNumVisitas($numVisitas)
    {
        $this->numVisitas = $numVisitas;

        return $this;
    }

    /**
     * Get numVisitas
     *
     * @return string 
     */
    public function getNumVisitas()
    {
        return $this->numVisitas;
    }

    /**
     * Add examene
     *
     * @param \AppBundle\Entity\Examen $examene
     *
     * @return Hospitalizacion
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
     * @return Hospitalizacion
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
     * @return Hospitalizacion
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
