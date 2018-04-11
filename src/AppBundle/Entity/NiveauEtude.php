<?php

namespace AppBundle\Entity;

/**
 * NiveauEtude
 */
class NiveauEtude
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $codeNiveauEtude;

    /**
     * @var string
     */
    private $libelleNiveauEtude;


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
     * Set codeNiveauEtude
     *
     * @param string $codeNiveauEtude
     *
     * @return NiveauEtude
     */
    public function setCodeNiveauEtude($codeNiveauEtude)
    {
        $this->codeNiveauEtude = $codeNiveauEtude;

        return $this;
    }

    /**
     * Get codeNiveauEtude
     *
     * @return string
     */
    public function getCodeNiveauEtude()
    {
        return $this->codeNiveauEtude;
    }

    /**
     * Set libelleNiveauEtude
     *
     * @param string $libelleNiveauEtude
     *
     * @return NiveauEtude
     */
    public function setLibelleNiveauEtude($libelleNiveauEtude)
    {
        $this->libelleNiveauEtude = $libelleNiveauEtude;

        return $this;
    }

    /**
     * Get libelleNiveauEtude
     *
     * @return string
     */
    public function getLibelleNiveauEtude()
    {
        return $this->libelleNiveauEtude;
    }
}
