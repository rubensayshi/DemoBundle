<?php

namespace GoGreat\DemoBundle\Entity;

/**
 * GoGreat\DemoBundle\Entity\DemoUser
 */
class DemoUser
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var GoGreat\DemoBundle\Entity\DemoComment
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add comments
     *
     * @param GoGreat\DemoBundle\Entity\DemoComment $comments
     */
    public function addComments(\GoGreat\DemoBundle\Entity\DemoComment $comments)
    {
    	$comments->setAuthor($this);
        $this->comments[] = $comments;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection $comments
     */
    public function getComments()
    {
        return $this->comments;
    }
}