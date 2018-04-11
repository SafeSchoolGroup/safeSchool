<?php

namespace AppBundle\Entity;

/**
 * MoyennePeriodiqueApprenant
 */
class MoyennePeriodiqueApprenant
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $moyenne;

    /**
     * @var \AppBundle\Entity\CursusApprenant
     */
    private $apprenantCursus;

    /**
     * @var \AppBundle\Entity\Periode
     */
    private $periode;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MoyennePeriodiqueApprenant
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
     * @return MoyennePeriodiqueApprenant
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
     * Set moyenne
     *
     * @param string $moyenne
     *
     * @return MoyennePeriodiqueApprenant
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return string
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set apprenantCursus
     *
     * @param \AppBundle\Entity\CursusApprenant $apprenantCursus
     *
     * @return MoyennePeriodiqueApprenant
     */
    public function setApprenantCursus(\AppBundle\Entity\CursusApprenant $apprenantCursus = null)
    {
        $this->apprenantCursus = $apprenantCursus;

        return $this;
    }

    /**
     * Get apprenantCursus
     *
     * @return \AppBundle\Entity\CursusApprenant
     */
    public function getApprenantCursus()
    {
        return $this->apprenantCursus;
    }

    /**
     * Set periode
     *
     * @param \AppBundle\Entity\Periode $periode
     *
     * @return MoyennePeriodiqueApprenant
     */
    public function setPeriode(\AppBundle\Entity\Periode $periode = null)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \AppBundle\Entity\Periode
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
