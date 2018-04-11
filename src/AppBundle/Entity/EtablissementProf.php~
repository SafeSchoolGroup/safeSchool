<?php

namespace AppBundle\Entity;

/**
 * EtablissementProf
 */
class EtablissementProf
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etsProfMatieres;

    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissement;

    /**
     * @var \AppBundle\Entity\Prof
     */
    private $prof;

    /**
     * @var \AppBundle\Entity\Matiere
     */
    private $matiere;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etsProfMatieres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add etsProfMatiere
     *
     * @param \AppBundle\Entity\Enseigner $etsProfMatiere
     *
     * @return EtablissementProf
     */
    public function addEtsProfMatiere(\AppBundle\Entity\Enseigner $etsProfMatiere)
    {
        $this->etsProfMatieres[] = $etsProfMatiere;

        return $this;
    }

    /**
     * Remove etsProfMatiere
     *
     * @param \AppBundle\Entity\Enseigner $etsProfMatiere
     */
    public function removeEtsProfMatiere(\AppBundle\Entity\Enseigner $etsProfMatiere)
    {
        $this->etsProfMatieres->removeElement($etsProfMatiere);
    }

    /**
     * Get etsProfMatieres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtsProfMatieres()
    {
        return $this->etsProfMatieres;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return EtablissementProf
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

    /**
     * Set prof
     *
     * @param \AppBundle\Entity\Prof $prof
     *
     * @return EtablissementProf
     */
    public function setProf(\AppBundle\Entity\Prof $prof = null)
    {
        $this->prof = $prof;

        return $this;
    }

    /**
     * Get prof
     *
     * @return \AppBundle\Entity\Prof
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set matiere
     *
     * @param \AppBundle\Entity\Matiere $matiere
     *
     * @return EtablissementProf
     */
    public function setMatiere(\AppBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \AppBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
}
