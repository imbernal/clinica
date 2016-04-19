<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fisioterapia
 *
 * @ORM\Entity
 */
class Fisioterapia extends Servicio
{
	public function __toString() {
		return $this->getTipo();
	}
}

