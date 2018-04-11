<?php

namespace AppBundle\Entity;

/**
 * Enseigner
 */
class Enseigner
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateEnseigner;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $progCours;

    /**
     * @var \AppBundle\Entity\SousClasse
     */
    private $sousClasse;

    /**
     * @var \AppBundle\Entity\EtablissementProf
     */
    private $etablissementProf;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->progCours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateEnseigner
     *
     * @param \DateTime $dateEnseigner
     *
     * @return Enseigner
     */
    public function setDateEnseigner($dateEnseigner)
    {
        $this->dateEnseigner = $dateEnseigner;

        return $this;
    }

    /**
     * Get dateEnseigner
     *
     * @return \DateTime
     */
    public function getDateEnseigner()
    {
        return $this->dateEnseigner;
    }

    /**
     * Add progCour
     *
     * @param \AppBundle\Entity\ProgrammeCours $progCour
     *
     * @return Enseigner
     */
    public function addProgCour(\AppBundle\Entity\ProgrammeCours $progCour)
    {
        $this->progCours[] = $progCour;

        return $this;
    }

    /**
     * Remove progCour
     *
     * @param \AppBundle\Entity\ProgrammeCours $progCour
     */
    public function removeProgCour(\AppBundle\Entity\ProgrammeCours $progCour)
    {
        $this->progCours->removeElement($progCour);
    }

    /**
     * Get progCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProgCours()
    {
        return $this->progCours;
    }

    /**
     * Set sousClasse
     *
     * @param \AppBundle\Entity\SousClasse $sousClasse
     *
     * @return Enseigner
     */
    public function setSousClasse(\AppBundle\Entity\SousClasse $sousClasse = null)
    {
        $this->sousClasse = $sousClasse;

        return $this;
    }

    /**
     * Get sousClasse
     *
     * @return \AppBundle\Entity\SousClasse
     */
    public function getSousClasse()
    {
        return $this->sousClasse;
    }

    /**
     * Set etablissementProf
     *
     * @param \AppBundle\Entity\EtablissementProf $etablissementProf
     *
     * @return Enseigner
     */
    public function setEtablissementProf(\AppBundle\Entity\EtablissementProf $etablissementProf = null)
    {
        $this->etablissementProf = $etablissementProf;

        return $this;
    }

    /**
     * Get etablissementProf
     *
     * @return \AppBundle\Entity\EtablissementProf
     */
    public function getEtablissementProf()
    {
        return $this->etablissementProf;
    }
}
