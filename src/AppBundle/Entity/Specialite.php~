<?php

namespace AppBundle\Entity;

/**
 * Specialite
 */
class Specialite
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $codeSpecialite;

    /**
     * @var string
     */
    private $libelleSpecialite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etsClasseNiveauSpecialites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etsClasseNiveauSpecialites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeSpecialite
     *
     * @param string $codeSpecialite
     *
     * @return Specialite
     */
    public function setCodeSpecialite($codeSpecialite)
    {
        $this->codeSpecialite = $codeSpecialite;

        return $this;
    }

    /**
     * Get codeSpecialite
     *
     * @return string
     */
    public function getCodeSpecialite()
    {
        return $this->codeSpecialite;
    }

    /**
     * Set libelleSpecialite
     *
     * @param string $libelleSpecialite
     *
     * @return Specialite
     */
    public function setLibelleSpecialite($libelleSpecialite)
    {
        $this->libelleSpecialite = $libelleSpecialite;

        return $this;
    }

    /**
     * Get libelleSpecialite
     *
     * @return string
     */
    public function getLibelleSpecialite()
    {
        return $this->libelleSpecialite;
    }

    /**
     * Add etsClasseNiveauSpecialite
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite
     *
     * @return Specialite
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
}
