<?php

namespace Datawalke\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thumb
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Datawalke\MainBundle\Repository\ThumbRepository")
 */
class Thumb
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
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="thumbs")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $post;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="thumbs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=8)
     */
    private $type;


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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Votes
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
     * Set type
     *
     * @param string $type
     * @return Votes
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
     * Set post
     *
     * @param \Datawalke\MainBundle\Entity\Post $post
     * @return Thumb
     */
    public function setPost(\Datawalke\MainBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \Datawalke\MainBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set user
     *
     * @param \Datawalke\MainBundle\Entity\User $user
     * @return Thumb
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