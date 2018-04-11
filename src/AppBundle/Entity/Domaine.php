<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 */
class Domaine
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $codeDomaine;

    /**
     * @var string
     */
    private $libelleDomaine;

    /**
     * @var SousDomaine
     */

    protected $sousDomaines;

    /**
     * Constructor
     */
    public function __construct() {

        $this -> sousDomaines = new ArrayCollection();
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
     * Set codeDomaine
     *
     * @param string $codeDomaine
     * @return Domaine
     */
    public function setCodeDomaine($codeDomaine)
    {
        $this->codeDomaine = $codeDomaine;

        return $this;
    }

    /**
     * Get codeDomaine
     *
     * @return string 
     */
    public function getCodeDomaine()
    {
        return $this->codeDomaine;
    }

    /**
     * Set libelleDomaine
     *
     * @param string $libelleDomaine
     * @return Domaine
     */
    public function setLibelleDomaine($libelleDomaine)
    {
        $this->libelleDomaine = $libelleDomaine;

        return $this;
    }

    /**
     * Get libelleDomaine
     *
     * @return string 
     */
    public function getLibelleDomaine()
    {
        return $this->libelleDomaine;
    }


    /**
     * Add sousDomaines
     *
     * @param \AppBundle\Entity\SousDomaine $sousDomaines
     * @return Domaine
     */
    public function addSousDomaine(\AppBundle\Entity\SousDomaine $sousDomaines)
    {
        $this->sousDomaines[] = $sousDomaines;

        return $this;
    }

    /**
     * Remove sousDomaines
     *
     * @param \AppBundle\Entity\SousDomaine $sousDomaines
     */
    public function removeSousDomaine(\AppBundle\Entity\SousDomaine $sousDomaines)
    {
        $this->sousDomaines->removeElement($sousDomaines);
    }

    /**
     * Get sousDomaines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousDomaines()
    {
        return $this->sousDomaines;
    }
}
