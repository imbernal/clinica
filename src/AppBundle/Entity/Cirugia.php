<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cirugia
 *
 * @ORM\Entity
 */
class Cirugia extends Servicio
{
	public function __toString() {
		return $this->getTipo();
	}
}

