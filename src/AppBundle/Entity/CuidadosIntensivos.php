<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuidadosIntensivos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CuidadosIntensivos extends Servicio
{
    public function __toString() {
		return $this->getTipo();
	}
}

