<?php

namespace MyApp\BackofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 */
class Vehicule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $matricule;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var integer
     */
    private $capacite;


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
     * Set matricule
     *
     * @param integer $matricule
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Vehicule
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }
}
