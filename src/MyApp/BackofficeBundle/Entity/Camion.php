<?php

namespace MyApp\BackofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Camion
 */
class Camion
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
