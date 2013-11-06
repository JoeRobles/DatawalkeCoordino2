<?php

namespace Datawalke\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Datawalke\MainBundle\Repository\PostsRepository")
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="related", type="integer")
     */
    private $related;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=8)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", length=7)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_edited_timestamp", type="datetime")
     */
    private $lastEditedTimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="votes", type="smallint")
     */
    private $votes;

    /**
     * @var string
     *
     * @ORM\Column(name="url_title", type="string", length=255)
     */
    private $urlTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="public_key", type="string", length=255)
     */
    private $publicKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text")
     */
    private $tags;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="smallint")
     */
    private $flags;

    /**
     * @var integer
     *
     * @ORM\Column(name="notify", type="smallint")
     */
    private $notify;


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
     * Set type
     *
     * @param string $type
     * @return Posts
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
     * Set title
     *
     * @param string $title
     * @return Posts
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Posts
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Posts
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Posts
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set lastEditedTimestamp
     *
     * @param \DateTime $lastEditedTimestamp
     * @return Posts
     */
    public function setLastEditedTimestamp($lastEditedTimestamp)
    {
        $this->lastEditedTimestamp = $lastEditedTimestamp;
    
        return $this;
    }

    /**
     * Get lastEditedTimestamp
     *
     * @return \DateTime 
     */
    public function getLastEditedTimestamp()
    {
        return $this->lastEditedTimestamp;
    }

    /**
     * Set votes
     *
     * @param integer $votes
     * @return Posts
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;
    
        return $this;
    }

    /**
     * Get votes
     *
     * @return integer 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set urlTitle
     *
     * @param string $urlTitle
     * @return Posts
     */
    public function setUrlTitle($urlTitle)
    {
        $this->urlTitle = $urlTitle;
    
        return $this;
    }

    /**
     * Get urlTitle
     *
     * @return string 
     */
    public function getUrlTitle()
    {
        return $this->urlTitle;
    }

    /**
     * Set publicKey
     *
     * @param string $publicKey
     * @return Posts
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    
        return $this;
    }

    /**
     * Get publicKey
     *
     * @return string 
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Posts
     */
    public function setViews($views)
    {
        $this->views = $views;
    
        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Posts
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     * @return Posts
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;
    
        return $this;
    }

    /**
     * Get flags
     *
     * @return integer 
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set notify
     *
     * @param integer $notify
     * @return Posts
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;
    
        return $this;
    }

    /**
     * Get notify
     *
     * @return integer 
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set related
     *
     * @param integer $related
     * @return Posts
     */
    public function setRelated($related)
    {
        $this->related = $related;
    
        return $this;
    }

    /**
     * Get related
     *
     * @return integer 
     */
    public function getRelated()
    {
        return $this->related;
    }
}