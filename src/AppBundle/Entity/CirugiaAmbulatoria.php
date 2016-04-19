<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CirugiaAmbulatoria
 *
 * @ORM\Entity
 */
class CirugiaAmbulatoria extends Servicio
{
   public function __toString() {
		return $this->getTipo();
	}
}

