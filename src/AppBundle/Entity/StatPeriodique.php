<?php

namespace AppBundle\Entity;

/**
 * StatPeriodique
 */
class StatPeriodique
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $periode;

    /**
     * @var integer
     */
    private $effectifTotal;

    /**
     * @var string
     */
    private $moyenne;

    /**
     * @var integer
     */
    private $nombreApprenantAyantMoyenne;

    /**
     * @var string
     */
    private $anneeScolaire;

    /**
     * @var \AppBundle\Entity\SousClasse
     */
    private $sousClasse;


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
     * Set periode
     *
     * @param string $periode
     *
     * @return StatPeriodique
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set effectifTotal
     *
     * @param integer $effectifTotal
     *
     * @return StatPeriodique
     */
    public function setEffectifTotal($effectifTotal)
    {
        $this->effectifTotal = $effectifTotal;

        return $this;
    }

    /**
     * Get effectifTotal
     *
     * @return integer
     */
    public function getEffectifTotal()
    {
        return $this->effectifTotal;
    }

    /**
     * Set moyenne
     *
     * @param string $moyenne
     *
     * @return StatPeriodique
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
     * Set nombreApprenantAyantMoyenne
     *
     * @param integer $nombreApprenantAyantMoyenne
     *
     * @return StatPeriodique
     */
    public function setNombreApprenantAyantMoyenne($nombreApprenantAyantMoyenne)
    {
        $this->nombreApprenantAyantMoyenne = $nombreApprenantAyantMoyenne;

        return $this;
    }

    /**
     * Get nombreApprenantAyantMoyenne
     *
     * @return integer
     */
    public function getNombreApprenantAyantMoyenne()
    {
        return $this->nombreApprenantAyantMoyenne;
    }

    /**
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     *
     * @return StatPeriodique
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
     * Set sousClasse
     *
     * @param \AppBundle\Entity\SousClasse $sousClasse
     *
     * @return StatPeriodique
     */
    public function setSousClasse(\AppBundle\Entity\SousClasse $sousClasse = null)
    {
        $this->sousClasse = $sousClasse;

        return $this;
    }

    /**
     * Get sousClasse
     *
     * @return \AppBundle\Entity\SousClasse
     */
    public function getSousClasse()
    {
        return $this->sousClasse;
    }
}
