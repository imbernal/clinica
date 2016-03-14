<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operativo
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"aseador" = "Aseador", "cocinero" = "Cocinero" , "oficiosvarios" = "OficiosVarios"})
 */
class Operativo extends Personal
{

}

