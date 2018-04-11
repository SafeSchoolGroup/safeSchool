<?php

namespace AppBundle\Entity;

/**
 * Note
 */
class Note
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var float
     */
    private $note;

    /**
     * @var string
     */
    private $typeNote;

    /**
     * @var \DateTime
     */
    private $dateNote;

    /**
     * @var \AppBundle\Entity\CursusApprenant
     */
    private $apprenantCursus;

    /**
     * @var \AppBundle\Entity\Matiere
     */
    private $matiere;


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
     * Set note
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set typeNote
     *
     * @param string $typeNote
     *
     * @return Note
     */
    public function setTypeNote($typeNote)
    {
        $this->typeNote = $typeNote;

        return $this;
    }

    /**
     * Get typeNote
     *
     * @return string
     */
    public function getTypeNote()
    {
        return $this->typeNote;
    }

    /**
     * Set dateNote
     *
     * @param \DateTime $dateNote
     *
     * @return Note
     */
    public function setDateNote($dateNote)
    {
        $this->dateNote = $dateNote;

        return $this;
    }

    /**
     * Get dateNote
     *
     * @return \DateTime
     */
    public function getDateNote()
    {
        return $this->dateNote;
    }

    /**
     * Set apprenantCursus
     *
     * @param \AppBundle\Entity\CursusApprenant $apprenantCursus
     *
     * @return Note
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
     * Set matiere
     *
     * @param \AppBundle\Entity\Matiere $matiere
     *
     * @return Note
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
