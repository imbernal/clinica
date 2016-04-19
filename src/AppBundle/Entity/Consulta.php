<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
 * @ORM\Entity
 */
class Consulta extends Servicio
{
	public function __toString() {
		return $this->getTipo();
	}
}

