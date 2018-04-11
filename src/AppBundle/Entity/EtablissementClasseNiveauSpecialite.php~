<?php

namespace AppBundle\Entity;

/**
 * EtablissementClasseNiveauSpecialite
 */
class EtablissementClasseNiveauSpecialite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $apprenantCursus;

    /**
     * @var \AppBundle\Entity\EtablissementClasseNiveau
     */
    private $etsClasseNiveau;

    /**
     * @var \AppBundle\Entity\Specialite
     */
    private $specialite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->apprenantCursus = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add apprenantCursus
     *
     * @param \AppBundle\Entity\CursusApprenant $apprenantCursus
     *
     * @return EtablissementClasseNiveauSpecialite
     */
    public function addApprenantCursus(\AppBundle\Entity\CursusApprenant $apprenantCursus)
    {
        $this->apprenantCursus[] = $apprenantCursus;

        return $this;
    }

    /**
     * Remove apprenantCursus
     *
     * @param \AppBundle\Entity\CursusApprenant $apprenantCursus
     */
    public function removeApprenantCursus(\AppBundle\Entity\CursusApprenant $apprenantCursus)
    {
        $this->apprenantCursus->removeElement($apprenantCursus);
    }

    /**
     * Get apprenantCursus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprenantCursus()
    {
        return $this->apprenantCursus;
    }

    /**
     * Set etsClasseNiveau
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveau $etsClasseNiveau
     *
     * @return EtablissementClasseNiveauSpecialite
     */
    public function setEtsClasseNiveau(\AppBundle\Entity\EtablissementClasseNiveau $etsClasseNiveau = null)
    {
        $this->etsClasseNiveau = $etsClasseNiveau;

        return $this;
    }

    /**
     * Get etsClasseNiveau
     *
     * @return \AppBundle\Entity\EtablissementClasseNiveau
     */
    public function getEtsClasseNiveau()
    {
        return $this->etsClasseNiveau;
    }

    /**
     * Set specialite
     *
     * @param \AppBundle\Entity\Specialite $specialite
     *
     * @return EtablissementClasseNiveauSpecialite
     */
    public function setSpecialite(\AppBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \AppBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }
}
