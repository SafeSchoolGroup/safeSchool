<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 */
class Vote
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var integer
     */
    private $nbreEtoiles;

    /**
     * @var \DateTime
     */
    private $dateVote;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $annee;

    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissement;

    /**
     * @var \SafeSchool\UserBundle\Entity\User
     */
    private $user;


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
     * Set nbreEtoiles
     *
     * @param integer $nbreEtoiles
     *
     * @return Vote
     */
    public function setNbreEtoiles($nbreEtoiles)
    {
        $this->nbreEtoiles = $nbreEtoiles;

        return $this;
    }

    /**
     * Get nbreEtoiles
     *
     * @return integer
     */
    public function getNbreEtoiles()
    {
        return $this->nbreEtoiles;
    }

    /**
     * Set dateVote
     *
     * @param \DateTime $dateVote
     *
     * @return Vote
     */
    public function setDateVote($dateVote)
    {
        $this->dateVote = $dateVote;

        return $this;
    }

    /**
     * Get dateVote
     *
     * @return \DateTime
     */
    public function getDateVote()
    {
        return $this->dateVote;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Vote
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Vote
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     *
     * @return Vote
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
     * Set user
     *
     * @param \SafeSchool\UserBundle\Entity\User $user
     *
     * @return Vote
     */
    public function setUser(\SafeSchool\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SafeSchool\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
