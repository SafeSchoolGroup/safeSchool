<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prof
 */
class Prof extends PersonneSuperClass
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profEtablissements;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profEtablissements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add profEtablissement
     *
     * @param \AppBundle\Entity\EtablissementProf $profEtablissement
     *
     * @return Prof
     */
    public function addProfEtablissement(\AppBundle\Entity\EtablissementProf $profEtablissement)
    {
        $this->profEtablissements[] = $profEtablissement;

        return $this;
    }

    /**
     * Remove profEtablissement
     *
     * @param \AppBundle\Entity\EtablissementProf $profEtablissement
     */
    public function removeProfEtablissement(\AppBundle\Entity\EtablissementProf $profEtablissement)
    {
        $this->profEtablissements->removeElement($profEtablissement);
    }

    /**
     * Get profEtablissements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfEtablissements()
    {
        return $this->profEtablissements;
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
}
