<?php

namespace AppBundle\Entity;

/**
 * EtablissementDirigeant
 */
class EtablissementDirigeant
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissement;

    /**
     * @var \AppBundle\Entity\Dirigeant
     */
    private $dirigeant;


    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $annee;


    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return EtablissementDirigeant
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EtablissementDirigeant
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EtablissementDirigeant
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return EtablissementDirigeant
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
     * Set dirigeant
     *
     * @param \AppBundle\Entity\Dirigeant $dirigeant
     *
     * @return EtablissementDirigeant
     */
    public function setDirigeant(\AppBundle\Entity\Dirigeant $dirigeant = null)
    {
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Get dirigeant
     *
     * @return \AppBundle\Entity\Dirigeant
     */
    public function getDirigeant()
    {
        return $this->dirigeant;
    }
}
