<?php

namespace AppBundle\Entity;

/**
 * Matiere
 */
class Matiere
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $codeMatiere;

    /**
     * @var string
     */
    private $libelleMatiere;

    /**
     * @var integer
     */
    private $credit;

    /**
     * @var integer
     */
    private $masseHoraire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $notes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etablissementProfMatieres;

    /**
     * @var \AppBundle\Entity\EtablissementClasseNiveauSpecialite
     */
    private $etsClasseNiveauSpecialite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etablissementProfMatieres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeMatiere
     *
     * @param string $codeMatiere
     *
     * @return Matiere
     */
    public function setCodeMatiere($codeMatiere)
    {
        $this->codeMatiere = $codeMatiere;

        return $this;
    }

    /**
     * Get codeMatiere
     *
     * @return string
     */
    public function getCodeMatiere()
    {
        return $this->codeMatiere;
    }

    /**
     * Set libelleMatiere
     *
     * @param string $libelleMatiere
     *
     * @return Matiere
     */
    public function setLibelleMatiere($libelleMatiere)
    {
        $this->libelleMatiere = $libelleMatiere;

        return $this;
    }

    /**
     * Get libelleMatiere
     *
     * @return string
     */
    public function getLibelleMatiere()
    {
        return $this->libelleMatiere;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return Matiere
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set masseHoraire
     *
     * @param integer $masseHoraire
     *
     * @return Matiere
     */
    public function setMasseHoraire($masseHoraire)
    {
        $this->masseHoraire = $masseHoraire;

        return $this;
    }

    /**
     * Get masseHoraire
     *
     * @return integer
     */
    public function getMasseHoraire()
    {
        return $this->masseHoraire;
    }

    /**
     * Add note
     *
     * @param \AppBundle\Entity\Note $note
     *
     * @return Matiere
     */
    public function addNote(\AppBundle\Entity\Note $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \AppBundle\Entity\Note $note
     */
    public function removeNote(\AppBundle\Entity\Note $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add etablissementProfMatiere
     *
     * @param \AppBundle\Entity\EtablissementProf $etablissementProfMatiere
     *
     * @return Matiere
     */
    public function addEtablissementProfMatiere(\AppBundle\Entity\EtablissementProf $etablissementProfMatiere)
    {
        $this->etablissementProfMatieres[] = $etablissementProfMatiere;

        return $this;
    }

    /**
     * Remove etablissementProfMatiere
     *
     * @param \AppBundle\Entity\EtablissementProf $etablissementProfMatiere
     */
    public function removeEtablissementProfMatiere(\AppBundle\Entity\EtablissementProf $etablissementProfMatiere)
    {
        $this->etablissementProfMatieres->removeElement($etablissementProfMatiere);
    }

    /**
     * Get etablissementProfMatieres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementProfMatieres()
    {
        return $this->etablissementProfMatieres;
    }

    /**
     * Set etsClasseNiveauSpecialite
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite
     *
     * @return Matiere
     */
    public function setEtablissementClasseNiveauSpecialite(\AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite = null)
    {
        $this->etsClasseNiveauSpecialite = $etsClasseNiveauSpecialite;

        return $this;
    }

    /**
     * Get etsClasseNiveauSpecialite
     *
     * @return \AppBundle\Entity\EtablissementClasseNiveauSpecialite
     */
    public function getEtablissementClasseNiveauSpecialite()
    {
        return $this->etsClasseNiveauSpecialite;
    }

    /**
     * Set etsClasseNiveauSpecialite
     *
     * @param \AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite
     *
     * @return Matiere
     */
    public function setEtsClasseNiveauSpecialite(\AppBundle\Entity\EtablissementClasseNiveauSpecialite $etsClasseNiveauSpecialite = null)
    {
        $this->etsClasseNiveauSpecialite = $etsClasseNiveauSpecialite;

        return $this;
    }

    /**
     * Get etsClasseNiveauSpecialite
     *
     * @return \AppBundle\Entity\EtablissementClasseNiveauSpecialite
     */
    public function getEtsClasseNiveauSpecialite()
    {
        return $this->etsClasseNiveauSpecialite;
    }
}
