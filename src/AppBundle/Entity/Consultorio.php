<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Consultorio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Consultorio
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
     * @ORM\Column(name="piso", type="string", length=255)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="ancho", type="string", length=255)
     */
    private $ancho;

    /**
     * @var string
     *
     * @ORM\Column(name="largo", type="string", length=255)
     */
    private $largo;

    /**
     * @var string
     *
     * @ORM\Column(name="cant_bano", type="string", length=255)
     */
    private $cantBano;

    /**
     * @var string
     *
     * @ORM\Column(name="cant_closet", type="string", length=255)
     */
    private $cantCloset;

    /**
     * @var string
     *
     * @ORM\Column(name="cant_cama", type="string", length=255)
     */
    private $cantCama;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ventana", type="boolean")
     */
    private $ventana;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="metro_cuadrado", type="string", length=255)
     */
    private $metroCuadrado;

    /**
     * @var string
     *
     * @ORM\Column(name="propia_alquilada", type="string", length=255)
     */
    private $propiaAlquilada;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato_arrendamiento", type="string", length=255)
     */
    private $contratoArrendamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_admin", type="string", length=255)
     */
    private $valorAdmin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_fecha", type="datetime")
     */
    private $ultimaFecha;



    public function __construct()
    {
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
     * Set piso
     *
     * @param string $piso
     * @return Consultorio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Consultorio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set ancho
     *
     * @param string $ancho
     * @return Consultorio
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get ancho
     *
     * @return string 
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set largo
     *
     * @param string $largo
     * @return Consultorio
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }

    /**
     * Get largo
     *
     * @return string 
     */
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set cantBano
     *
     * @param string $cantBano
     * @return Consultorio
     */
    public function setCantBano($cantBano)
    {
        $this->cantBano = $cantBano;

        return $this;
    }

    /**
     * Get cantBano
     *
     * @return string 
     */
    public function getCantBano()
    {
        return $this->cantBano;
    }

    /**
     * Set cantCloset
     *
     * @param string $cantCloset
     * @return Consultorio
     */
    public function setCantCloset($cantCloset)
    {
        $this->cantCloset = $cantCloset;

        return $this;
    }

    /**
     * Get cantCloset
     *
     * @return string 
     */
    public function getCantCloset()
    {
        return $this->cantCloset;
    }

    /**
     * Set cantCama
     *
     * @param string $cantCama
     * @return Consultorio
     */
    public function setCantCama($cantCama)
    {
        $this->cantCama = $cantCama;

        return $this;
    }

    /**
     * Get cantCama
     *
     * @return string 
     */
    public function getCantCama()
    {
        return $this->cantCama;
    }

    /**
     * Set ventana
     *
     * @param boolean $ventana
     * @return Consultorio
     */
    public function setVentana($ventana)
    {
        $this->ventana = $ventana;

        return $this;
    }

    /**
     * Get ventana
     *
     * @return boolean 
     */
    public function getVentana()
    {
        return $this->ventana;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Consultorio
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
     * Set metroCuadrado
     *
     * @param string $metroCuadrado
     * @return Consultorio
     */
    public function setMetroCuadrado($metroCuadrado)
    {
        $this->metroCuadrado = $metroCuadrado;

        return $this;
    }

    /**
     * Get metroCuadrado
     *
     * @return string 
     */
    public function getMetroCuadrado()
    {
        return $this->metroCuadrado;
    }

    /**
     * Set propiaAlquilada
     *
     * @param string $propiaAlquilada
     * @return Consultorio
     */
    public function setPropiaAlquilada($propiaAlquilada)
    {
        $this->propiaAlquilada = $propiaAlquilada;

        return $this;
    }

    /**
     * Get propiaAlquilada
     *
     * @return string 
     */
    public function getPropiaAlquilada()
    {
        return $this->propiaAlquilada;
    }


    /**
     * Set contratoArrendamiento
     *
     * @param string $contratoArrendamiento
     * @return Consultorio
     */
    public function setContratoArrendamiento($contratoArrendamiento)
    {
        $this->contratoArrendamiento = $contratoArrendamiento;

        return $this;
    }

    /**
     * Get contratoArrendamiento
     *
     * @return string 
     */
    public function getContratoArrendamiento()
    {
        return $this->contratoArrendamiento;
    }

    /**
     * Set valorAdmin
     *
     * @param string $valorAdmin
     * @return Consultorio
     */
    public function setValorAdmin($valorAdmin)
    {
        $this->valorAdmin = $valorAdmin;

        return $this;
    }

    /**
     * Get valorAdmin
     *
     * @return string 
     */
    public function getValorAdmin()
    {
        return $this->valorAdmin;
    }

    /**
     * Set ultimaFecha
     *
     * @param \DateTime $ultimaFecha
     * @return Consultorio
     */
    public function setUltimaFecha($ultimaFecha)
    {
        $this->ultimaFecha = $ultimaFecha;

        return $this;
    }

    /**
     * Get ultimaFecha
     *
     * @return \DateTime 
     */
    public function getUltimaFecha()
    {
        return $this->ultimaFecha;
    }
}
