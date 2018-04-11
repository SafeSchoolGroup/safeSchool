<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtablissementClasse
 */
class EtablissementClasse
{

    /**
     * @var \stdClass
     */
    private $etablissement;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $fraisScolarite;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \AppBundle\Entity\Classe
     */
    private $classe;


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
     * Set fraisScolarite
     *
     * @param integer $fraisScolarite
     *
     * @return EtablissementClasse
     */
    public function setFraisScolarite($fraisScolarite)
    {
        $this->fraisScolarite = $fraisScolarite;

        return $this;
    }

    /**
     * Get fraisScolarite
     *
     * @return integer
     */
    public function getFraisScolarite()
    {
        return $this->fraisScolarite;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EtablissementClasse
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EtablissementClasse
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return EtablissementClasse
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
     * Set classe
     *
     * @param \AppBundle\Entity\Classe $classe
     *
     * @return EtablissementClasse
     */
    public function setClasse(\AppBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \AppBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }
}
