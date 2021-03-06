<?php

namespace Datawalke\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostRev
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Datawalke\MainBundle\Repository\PostRevRepository")
 */
class PostRev
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="postrevs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="related", type="integer")
     */
    private $related;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="version_created", type="datetime")
     */
    private $versionCreated;

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
     * @ORM\Column(name="status", type="text", length=6)
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set versionCreated
     *
     * @param \DateTime $versionCreated
     * @return PostsRevs
     */
    public function setVersionCreated($versionCreated)
    {
        $this->versionCreated = $versionCreated;
    
        return $this;
    }

    /**
     * Get versionCreated
     *
     * @return \DateTime 
     */
    public function getVersionCreated()
    {
        return $this->versionCreated;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * @return PostsRevs
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
     * Set related
     *
     * @param integer $related
     * @return PostsRevs
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

    /**
     * Set user
     *
     * @param \Datawalke\MainBundle\Entity\User $user
     * @return PostRev
     */
    public function setUser(\Datawalke\MainBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Datawalke\MainBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}