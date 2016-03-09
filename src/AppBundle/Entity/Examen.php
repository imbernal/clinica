<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Examen
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
     * @ORM\Column(name="costo", type="string", length=255)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="maquinas", type="string", length=255)
     */
    private $maquinas;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=255)
     */
    private $resultado;


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
     * @return Examen
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
     * Set costo
     *
     * @param string $costo
     * @return Examen
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set maquinas
     *
     * @param string $maquinas
     * @return Examen
     */
    public function setMaquinas($maquinas)
    {
        $this->maquinas = $maquinas;

        return $this;
    }

    /**
     * Get maquinas
     *
     * @return string 
     */
    public function getMaquinas()
    {
        return $this->maquinas;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return Examen
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }
}
