<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Urgencia
 *
 * @ORM\Entity
 */
class Urgencia extends Servicio
{
    

    /**
     * Add examene
     *
     * @param \AppBundle\Entity\Examen $examene
     *
     * @return Urgencia
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
     * @return Urgencia
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
     * @return Urgencia
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
