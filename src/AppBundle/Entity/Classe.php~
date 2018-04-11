<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe
 */
class Classe
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $codeClasse;

    /**
     * @var string
     */
    private $libelleClasse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $classeEtablissements;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classeEtablissements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeClasse
     *
     * @param string $codeClasse
     *
     * @return Classe
     */
    public function setCodeClasse($codeClasse)
    {
        $this->codeClasse = $codeClasse;

        return $this;
    }

    /**
     * Get codeClasse
     *
     * @return string
     */
    public function getCodeClasse()
    {
        return $this->codeClasse;
    }

    /**
     * Set libelleClasse
     *
     * @param string $libelleClasse
     *
     * @return Classe
     */
    public function setLibelleClasse($libelleClasse)
    {
        $this->libelleClasse = $libelleClasse;

        return $this;
    }

    /**
     * Get libelleClasse
     *
     * @return string
     */
    public function getLibelleClasse()
    {
        return $this->libelleClasse;
    }

    /**
     * Add classeEtablissement
     *
     * @param \AppBundle\Entity\EtablissementClasse $classeEtablissement
     *
     * @return Classe
     */
    public function addClasseEtablissement(\AppBundle\Entity\EtablissementClasse $classeEtablissement)
    {
        $this->classeEtablissements[] = $classeEtablissement;

        return $this;
    }

    /**
     * Remove classeEtablissement
     *
     * @param \AppBundle\Entity\EtablissementClasse $classeEtablissement
     */
    public function removeClasseEtablissement(\AppBundle\Entity\EtablissementClasse $classeEtablissement)
    {
        $this->classeEtablissements->removeElement($classeEtablissement);
    }

    /**
     * Get classeEtablissements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasseEtablissements()
    {
        return $this->classeEtablissements;
    }
}
