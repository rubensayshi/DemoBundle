<?php

namespace GoGreat\DemoBundle\Entity;

/**
 * GoGreat\DemoBundle\Entity\DemoComment
 */
class DemoComment
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $body
     */
    private $body;

    /**
     * @var GoGreat\DemoBundle\Entity\DemoUser
     */
    private $author;


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
     * Set body
     *
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return string $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set author
     *
     * @param GoGreat\DemoBundle\Entity\DemoUser $author
     */
    public function setAuthor(\GoGreat\DemoBundle\Entity\DemoUser $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return GoGreat\DemoBundle\Entity\DemoUser $author
     */
    public function getAuthor()
    {
        return $this->author;
    }
}