<?php

namespace AppBundle\Entity;

/**
 * Periode
 */
class Periode
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $anneeScolaire;

    /**
     * @var boolean
     */
    private $boucle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $moyennePeriodiqueApprenants;

    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->moyennePeriodiqueApprenants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Periode
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Periode
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Periode
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
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     *
     * @return Periode
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return string
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * Set boucle
     *
     * @param boolean $boucle
     *
     * @return Periode
     */
    public function setBoucle($boucle)
    {
        $this->boucle = $boucle;

        return $this;
    }

    /**
     * Get boucle
     *
     * @return boolean
     */
    public function getBoucle()
    {
        return $this->boucle;
    }

    /**
     * Add moyennePeriodiqueApprenant
     *
     * @param \AppBundle\Entity\MoyennePeriodiqueApprenant $moyennePeriodiqueApprenant
     *
     * @return Periode
     */
    public function addMoyennePeriodiqueApprenant(\AppBundle\Entity\MoyennePeriodiqueApprenant $moyennePeriodiqueApprenant)
    {
        $this->moyennePeriodiqueApprenants[] = $moyennePeriodiqueApprenant;

        return $this;
    }

    /**
     * Remove moyennePeriodiqueApprenant
     *
     * @param \AppBundle\Entity\MoyennePeriodiqueApprenant $moyennePeriodiqueApprenant
     */
    public function removeMoyennePeriodiqueApprenant(\AppBundle\Entity\MoyennePeriodiqueApprenant $moyennePeriodiqueApprenant)
    {
        $this->moyennePeriodiqueApprenants->removeElement($moyennePeriodiqueApprenant);
    }

    /**
     * Get moyennePeriodiqueApprenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMoyennePeriodiqueApprenants()
    {
        return $this->moyennePeriodiqueApprenants;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return Periode
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
