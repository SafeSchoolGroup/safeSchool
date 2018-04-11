<?php

namespace AppBundle\Entity;

/**
 * UploadedFile
 */
class UploadedFile
{
    const TYPE_FOLDER = "folder";
    const TYPE_FILE = "file" ;

    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $srcpathOrOldname;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $lastModified;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \AppBundle\Entity\UploadedFile
     */
    private $parentFolder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->lastModified = new \DateTime('now');
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
     * Set name
     *
     * @param string $name
     *
     * @return UploadedFile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return UploadedFile
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set srcpathOrOldname
     *
     * @param string $srcpathOrOldname
     *
     * @return UploadedFile
     */
    public function setSrcpathOrOldname($srcpathOrOldname)
    {
        $this->srcpathOrOldname = $srcpathOrOldname;

        return $this;
    }

    /**
     * Get srcpathOrOldname
     *
     * @return string
     */
    public function getSrcpathOrOldname()
    {
        return $this->srcpathOrOldname;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return UploadedFile
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UploadedFile
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
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return UploadedFile
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return UploadedFile
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\UploadedFile $child
     *
     * @return UploadedFile
     */
    public function addChild(\AppBundle\Entity\UploadedFile $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\UploadedFile $child
     */
    public function removeChild(\AppBundle\Entity\UploadedFile $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parentFolder
     *
     * @param \AppBundle\Entity\UploadedFile $parentFolder
     *
     * @return UploadedFile
     */
    public function setParentFolder(\AppBundle\Entity\UploadedFile $parentFolder = null)
    {
        $this->parentFolder = $parentFolder;

        return $this;
    }

    /**
     * Get parentFolder
     *
     * @return \AppBundle\Entity\UploadedFile
     */
    public function getParentFolder()
    {
        return $this->parentFolder;
    }
}
