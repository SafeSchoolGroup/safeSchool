<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 */
class Fichier
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $chemin;

    /**
     * @var \DateTime
     */
    private $dateStockage;

    /**
     * @var string
     */
    private $typeFichier;

    /**
     * @var boolean
     */
    private $isPhotoCouvertureExploit;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Exploit
     */
    private $exploit;

    /**
     * @var \AppBundle\Entity\Information
     */
    private $information;

    /**
     * @var \AppBundle\Entity\Apprenant
     */
    private $apprenant;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Fichier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Fichier
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set dateStockage
     *
     * @param \DateTime $dateStockage
     *
     * @return Fichier
     */
    public function setDateStockage($dateStockage)
    {
        $this->dateStockage = $dateStockage;

        return $this;
    }

    /**
     * Get dateStockage
     *
     * @return \DateTime
     */
    public function getDateStockage()
    {
        return $this->dateStockage;
    }

    /**
     * Set typeFichier
     *
     * @param string $typeFichier
     *
     * @return Fichier
     */
    public function setTypeFichier($typeFichier)
    {
        $this->typeFichier = $typeFichier;

        return $this;
    }

    /**
     * Get typeFichier
     *
     * @return string
     */
    public function getTypeFichier()
    {
        return $this->typeFichier;
    }

    /**
     * Set isPhotoCouvertureExploit
     *
     * @param boolean $isPhotoCouvertureExploit
     *
     * @return Fichier
     */
    public function setIsPhotoCouvertureExploit($isPhotoCouvertureExploit)
    {
        $this->isPhotoCouvertureExploit = $isPhotoCouvertureExploit;

        return $this;
    }

    /**
     * Get isPhotoCouvertureExploit
     *
     * @return boolean
     */
    public function getIsPhotoCouvertureExploit()
    {
        return $this->isPhotoCouvertureExploit;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Fichier
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Fichier
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set exploit
     *
     * @param \AppBundle\Entity\Exploit $exploit
     *
     * @return Fichier
     */
    public function setExploit(\AppBundle\Entity\Exploit $exploit = null)
    {
        $this->exploit = $exploit;

        return $this;
    }

    /**
     * Get exploit
     *
     * @return \AppBundle\Entity\Exploit
     */
    public function getExploit()
    {
        return $this->exploit;
    }

    /**
     * Set information
     *
     * @param \AppBundle\Entity\Information $information
     *
     * @return Fichier
     */
    public function setInformation(\AppBundle\Entity\Information $information = null)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return \AppBundle\Entity\Information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set apprenant
     *
     * @param \AppBundle\Entity\Apprenant $apprenant
     *
     * @return Fichier
     */
    public function setApprenant(\AppBundle\Entity\Apprenant $apprenant = null)
    {
        $this->apprenant = $apprenant;

        return $this;
    }

    /**
     * Get apprenant
     *
     * @return \AppBundle\Entity\Apprenant
     */
    public function getApprenant()
    {
        return $this->apprenant;
    }
}
