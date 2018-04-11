<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SousDomaine
 */
class SousDomaine
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $codeSousdomaine;

    /**
     * @var string
     */
    private $libelleSousdomaine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $exploits;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->exploits = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeSousdomaine
     *
     * @param string $codeSousdomaine
     *
     * @return SousDomaine
     */
    public function setCodeSousdomaine($codeSousdomaine)
    {
        $this->codeSousdomaine = $codeSousdomaine;

        return $this;
    }

    /**
     * Get codeSousdomaine
     *
     * @return string
     */
    public function getCodeSousdomaine()
    {
        return $this->codeSousdomaine;
    }

    /**
     * Set libelleSousdomaine
     *
     * @param string $libelleSousdomaine
     *
     * @return SousDomaine
     */
    public function setLibelleSousdomaine($libelleSousdomaine)
    {
        $this->libelleSousdomaine = $libelleSousdomaine;

        return $this;
    }

    /**
     * Get libelleSousdomaine
     *
     * @return string
     */
    public function getLibelleSousdomaine()
    {
        return $this->libelleSousdomaine;
    }

    /**
     * Add exploit
     *
     * @param \AppBundle\Entity\Exploit $exploit
     *
     * @return SousDomaine
     */
    public function addExploit(\AppBundle\Entity\Exploit $exploit)
    {
        $this->exploits[] = $exploit;

        return $this;
    }

    /**
     * Remove exploit
     *
     * @param \AppBundle\Entity\Exploit $exploit
     */
    public function removeExploit(\AppBundle\Entity\Exploit $exploit)
    {
        $this->exploits->removeElement($exploit);
    }

    /**
     * Get exploits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExploits()
    {
        return $this->exploits;
    }
}
