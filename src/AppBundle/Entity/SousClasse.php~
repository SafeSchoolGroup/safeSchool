<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousClasse
 */
class SousClasse
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $codeSousClasse;

    /**
     * @var string
     */
    private $libelleSousClasse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $apprenantCursus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sousClasseEnseigner;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $statPeriodiques;

    /**
     * @var \AppBundle\Entity\EtablissementClasseNiveau
     */
    private $etablissementClasseNiveau;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->apprenantCursus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sousClasseEnseigner = new \Doctrine\Common\Collections\ArrayCollection();
        $this->statPeriodiques = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeSousClasse
     *
     * @param string $codeSousClasse
     *
     * @return SousClasse
     */
    public function setCodeSousClasse($codeSousClasse)
    {
        $this->codeSousClasse = $codeSousClasse;

        return $this;
    }

    /**
     * Get codeSousClasse
     *
     * @return string
     */
    public function getCodeSousClasse()
    {
        return $this->codeSousClasse;
    }

    /**
     * Set libelleSousClasse
     *
     * @param string $libelleSousClasse
     *
     * @return SousClasse
     */
    public function setLibelleSousClasse($libelleSousClasse)
    {
        $this->libelleSousClasse = $libelleSousClasse;

        return $this;
    }

    /**
     * Get libelleSousClasse
     *
     * @return string
     */
    public function getLibelleSousClasse()
    {
        return $this->libelleSousClasse;
    }

    /**
     * Add apprenantCursus
     *
     * @param \AppBundle\Entity\CursusApprenant $apprenantCursus
     *
     * @return SousClasse
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
     * Add sousClasseEnseigner
     *
     * @param \AppBundle\Entity\Enseigner $sousClasseEnseigner
     *
     * @return SousClasse
     */
    public function addSousClasseEnseigner(\AppBundle\Entity\Enseigner $sousClasseEnseigner)
    {
        $this->sousClasseEnseigner[] = $sousClasseEnseigner;

        return $this;
    }

    /**
     * Remove sousClasseEnseigner
     *
     * @param \AppBundle\Entity\Enseigner $sousClasseEnseigner
     */
    public function removeSousClasseEnseigner(\AppBundle\Entity\Enseigner $sousClasseEnseigner)
    {
        $this->sousClasseEnseigner->removeElement($sousClasseEnseigner);
    }

    /**
     * Get sousClasseEnseigner
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousClasseEnseigner()
    {
        return $this->sousClasseEnseigner;
    }

    /**
     * Add statPeriodique
     *
     * @param \AppBundle\Entity\StatPeriodique $statPeriodique
     *
     * @return SousClasse
     */
    public function addStatPeriodique(\AppBundle\Entity\StatPeriodique $statPeriodique)
    {
        $this->statPeriodiques[] = $statPeriodique;

        return $this;
    }

    /**
     * Remove statPeriodique
     *
     * @param \AppBundle\Entity\StatPeriodique $statPeriodique
     */
    public function removeStatPeriodique(\AppBundle\Entity\StatPeriodique $statPeriodique)
    {
        $this->statPeriodiques->removeElement($statPeriodique);
    }

    /**
     * Get statPeriodiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatPeriodiques()
    {
        return $this->statPeriodiques;
    }

    /**
     * Set etablissementClasseNiveau
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveau $etablissementClasseNiveau
     *
     * @return SousClasse
     */
    public function setEtablissementClasseNiveau(\AppBundle\Entity\EtablissementClasseNiveau $etablissementClasseNiveau = null)
    {
        $this->etablissementClasseNiveau = $etablissementClasseNiveau;

        return $this;
    }

    /**
     * Get etablissementClasseNiveau
     *
     * @return \AppBundle\Entity\EtablissementClasseNiveau
     */
    public function getEtablissementClasseNiveau()
    {
        return $this->etablissementClasseNiveau;
    }
}
