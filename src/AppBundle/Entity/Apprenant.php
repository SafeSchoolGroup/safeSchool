<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Apprenant
 */
class Apprenant extends PersonneSuperClass
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $nationalite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $apprenantEtablissements;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $exploitApprenants;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fichiers;

    /**
     * @var \AppBundle\Entity\Tuteur
     */
    private $tuteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $exploits;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->apprenantEtablissements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->exploitApprenants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fichiers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->exploits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Apprenant
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Add apprenantEtablissement
     *
     * @param \AppBundle\Entity\EtablissementApprenant $apprenantEtablissement
     *
     * @return Apprenant
     */
    public function addApprenantEtablissement(\AppBundle\Entity\EtablissementApprenant $apprenantEtablissement)
    {
        $this->apprenantEtablissements[] = $apprenantEtablissement;

        return $this;
    }

    /**
     * Remove apprenantEtablissement
     *
     * @param \AppBundle\Entity\EtablissementApprenant $apprenantEtablissement
     */
    public function removeApprenantEtablissement(\AppBundle\Entity\EtablissementApprenant $apprenantEtablissement)
    {
        $this->apprenantEtablissements->removeElement($apprenantEtablissement);
    }

    /**
     * Get apprenantEtablissements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprenantEtablissements()
    {
        return $this->apprenantEtablissements;
    }

    /**
     * Add exploitApprenant
     *
     * @param \AppBundle\Entity\ExploitApprenant $exploitApprenant
     *
     * @return Apprenant
     */
    public function addExploitApprenant(\AppBundle\Entity\ExploitApprenant $exploitApprenant)
    {
        $this->exploitApprenants[] = $exploitApprenant;

        return $this;
    }

    /**
     * Remove exploitApprenant
     *
     * @param \AppBundle\Entity\ExploitApprenant $exploitApprenant
     */
    public function removeExploitApprenant(\AppBundle\Entity\ExploitApprenant $exploitApprenant)
    {
        $this->exploitApprenants->removeElement($exploitApprenant);
    }

    /**
     * Get exploitApprenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExploitApprenants()
    {
        return $this->exploitApprenants;
    }

    /**
     * Add fichier
     *
     * @param \AppBundle\Entity\Fichier $fichier
     *
     * @return Apprenant
     */
    public function addFichier(\AppBundle\Entity\Fichier $fichier)
    {
        $this->fichiers[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \AppBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\AppBundle\Entity\Fichier $fichier)
    {
        $this->fichiers->removeElement($fichier);
    }

    /**
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Set tuteur
     *
     * @param \AppBundle\Entity\Tuteur $tuteur
     *
     * @return Apprenant
     */
    public function setTuteur(\AppBundle\Entity\Tuteur $tuteur = null)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \AppBundle\Entity\Tuteur
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Add exploit
     *
     * @param \AppBundle\Entity\Exploit $exploit
     *
     * @return Apprenant
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
