<?php

namespace AppBundle\Entity;

/**
 * EtablissementClasseNiveau
 */
class EtablissementClasseNiveau
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etsClasseNiveauSpecialites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sousClasses;

    /**
     * @var \AppBundle\Entity\EtablissementClasse
     */
    private $etablissementClasse;

    /**
     * @var \AppBundle\Entity\NiveauEtude
     */
    private $niveauEtude;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etsClasseNiveauSpecialites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sousClasses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EtablissementClasseNiveau
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
     * @return EtablissementClasseNiveau
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return EtablissementClasseNiveau
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add etsClasseNiveauSpecialite
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite
     *
     * @return EtablissementClasseNiveau
     */
    public function addEtsClasseNiveauSpecialite(\AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite)
    {
        $this->etsClasseNiveauSpecialites[] = $etsClasseNiveauSpecialite;

        return $this;
    }

    /**
     * Remove etsClasseNiveauSpecialite
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite
     */
    public function removeEtsClasseNiveauSpecialite(\AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite)
    {
        $this->etsClasseNiveauSpecialites->removeElement($etsClasseNiveauSpecialite);
    }

    /**
     * Get etsClasseNiveauSpecialites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtsClasseNiveauSpecialites()
    {
        return $this->etsClasseNiveauSpecialites;
    }

    /**
     * Add sousClass
     *
     * @param \AppBundle\Entity\SousClasse $sousClass
     *
     * @return EtablissementClasseNiveau
     */
    public function addSousClass(\AppBundle\Entity\SousClasse $sousClass)
    {
        $this->sousClasses[] = $sousClass;

        return $this;
    }

    /**
     * Remove sousClass
     *
     * @param \AppBundle\Entity\SousClasse $sousClass
     */
    public function removeSousClass(\AppBundle\Entity\SousClasse $sousClass)
    {
        $this->sousClasses->removeElement($sousClass);
    }

    /**
     * Get sousClasses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousClasses()
    {
        return $this->sousClasses;
    }

    /**
     * Set etablissementClasse
     *
     * @param \AppBundle\Entity\EtablissementClasse $etablissementClasse
     *
     * @return EtablissementClasseNiveau
     */
    public function setEtablissementClasse(\AppBundle\Entity\EtablissementClasse $etablissementClasse = null)
    {
        $this->etablissementClasse = $etablissementClasse;

        return $this;
    }

    /**
     * Get etablissementClasse
     *
     * @return \AppBundle\Entity\EtablissementClasse
     */
    public function getEtablissementClasse()
    {
        return $this->etablissementClasse;
    }

    /**
     * Set niveauEtude
     *
     * @param \AppBundle\Entity\NiveauEtude $niveauEtude
     *
     * @return EtablissementClasseNiveau
     */
    public function setNiveauEtude(\AppBundle\Entity\NiveauEtude $niveauEtude = null)
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return \AppBundle\Entity\NiveauEtude
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }
}
