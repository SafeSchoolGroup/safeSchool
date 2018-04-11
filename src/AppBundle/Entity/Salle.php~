<?php

namespace AppBundle\Entity;

/**
 * Salle
 */
class Salle
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $codeSalle;

    /**
     * @var integer
     */
    private $nbrePlaces;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $progCours;

    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissement;

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
     * Set codeSalle
     *
     * @param string $codeSalle
     *
     * @return Salle
     */
    public function setCodeSalle($codeSalle)
    {
        $this->codeSalle = $codeSalle;

        return $this;
    }

    /**
     * Get codeSalle
     *
     * @return string
     */
    public function getCodeSalle()
    {
        return $this->codeSalle;
    }

    /**
     * Set nbrePlaces
     *
     * @param integer $nbrePlaces
     *
     * @return Salle
     */
    public function setNbrePlaces($nbrePlaces)
    {
        $this->nbrePlaces = $nbrePlaces;

        return $this;
    }

    /**
     * Get nbrePlaces
     *
     * @return integer
     */
    public function getNbrePlaces()
    {
        return $this->nbrePlaces;
    }

    /**
     * Add progCour
     *
     * @param \AppBundle\Entity\ProgrammeCours $progCour
     *
     * @return Salle
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
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return Salle
     */
    public function setEtablissement(\AppBundle\Entity\Etablissement $etablissement = null)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \AppBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
