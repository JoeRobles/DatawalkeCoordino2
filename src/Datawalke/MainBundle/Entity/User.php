<?php

namespace Datawalke\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Datawalke\MainBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\OneToMany(targetEntity="Badge", mappedBy="user")
     */
    protected $badges;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
     */
    protected $comments;
    
    /**
     * @ORM\OneToMany(targetEntity="History", mappedBy="user")
     */
    protected $histories;
    
    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
     */
    protected $posts;
    
    /**
     * @ORM\OneToMany(targetEntity="PostRev", mappedBy="user")
     */
    protected $postrevs;
    
    /**
     * @ORM\OneToMany(targetEntity="Thumb", mappedBy="user")
     */
    protected $thumbs;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url_title", type="string", length=255)
     */
    private $urlTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined", type="datetime")
     */
    private $joined;

    /**
     * @var string
     *
     * @ORM\Column(name="public_key", type="string", length=255)
     */
    private $publicKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="registered", type="boolean")
     */
    private $registered;

    /**
     * @var integer
     *
     * @ORM\Column(name="reputation", type="integer")
     */
    private $reputation;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="smallint")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text")
     */
    private $permission;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_count", type="integer")
     */
    private $answerCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer")
     */
    private $commentCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_coununt", type="integer")
     */
    private $questionCoununt;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->badges = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->histories = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->postrevs = new ArrayCollection();
        $this->thumbs = new ArrayCollection();
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
     * Set urlTitle
     *
     * @param string $urlTitle
     * @return Users
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
     * Set joined
     *
     * @param \DateTime $joined
     * @return Users
     */
    public function setJoined($joined)
    {
        $this->joined = $joined;
    
        return $this;
    }

    /**
     * Get joined
     *
     * @return \DateTime 
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * Set publicKey
     *
     * @param string $publicKey
     * @return Users
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
     * Set registered
     *
     * @param boolean $registered
     * @return Users
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
    
        return $this;
    }

    /**
     * Get registered
     *
     * @return boolean 
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set reputation
     *
     * @param integer $reputation
     * @return Users
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    
        return $this;
    }

    /**
     * Get reputation
     *
     * @return integer 
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Users
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Users
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Users
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Users
     */
    public function setInfo($info)
    {
        $this->info = $info;
    
        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set permission
     *
     * @param string $permission
     * @return Users
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    
        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Users
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set answerCount
     *
     * @param integer $answerCount
     * @return Users
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;
    
        return $this;
    }

    /**
     * Get answerCount
     *
     * @return integer 
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * Set commentCount
     *
     * @param integer $commentCount
     * @return Users
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    
        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer 
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set questionCoununt
     *
     * @param integer $questionCoununt
     * @return Users
     */
    public function setQuestionCoununt($questionCoununt)
    {
        $this->questionCoununt = $questionCoununt;
    
        return $this;
    }

    /**
     * Get questionCoununt
     *
     * @return integer 
     */
    public function getQuestionCoununt()
    {
        return $this->questionCoununt;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Users
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add badges
     *
     * @param \Datawalke\MainBundle\Entity\Badge $badges
     * @return User
     */
    public function addBadge(\Datawalke\MainBundle\Entity\Badge $badges)
    {
        $this->badges[] = $badges;
    
        return $this;
    }

    /**
     * Remove badges
     *
     * @param \Datawalke\MainBundle\Entity\Badge $badges
     */
    public function removeBadge(\Datawalke\MainBundle\Entity\Badge $badges)
    {
        $this->badges->removeElement($badges);
    }

    /**
     * Get badges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Add comments
     *
     * @param \Datawalke\MainBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\Datawalke\MainBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Datawalke\MainBundle\Entity\Comment $comments
     */
    public function removeComment(\Datawalke\MainBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add history
     *
     * @param \Datawalke\MainBundle\Entity\History $histories
     * @return User
     */
    public function addHistory(\Datawalke\MainBundle\Entity\History $histories)
    {
        $this->histories[] = $histories;
    
        return $this;
    }

    /**
     * Remove history
     *
     * @param \Datawalke\MainBundle\Entity\History $histories
     */
    public function removeHistory(\Datawalke\MainBundle\Entity\History $histories)
    {
        $this->histories->removeElement($histories);
    }

    /**
     * Get histories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Add post
     *
     * @param \Datawalke\MainBundle\Entity\Post $posts
     * @return User
     */
    public function addPost(\Datawalke\MainBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
    
        return $this;
    }

    /**
     * Remove posts
     *
     * @param \Datawalke\MainBundle\Entity\Post $posts
     */
    public function removePost(\Datawalke\MainBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add postrevs
     *
     * @param \Datawalke\MainBundle\Entity\PostRev $postrevs
     * @return User
     */
    public function addPostrev(\Datawalke\MainBundle\Entity\PostRev $postrevs)
    {
        $this->postrevs[] = $postrevs;
    
        return $this;
    }

    /**
     * Remove postrevs
     *
     * @param \Datawalke\MainBundle\Entity\PostRev $postrevs
     */
    public function removePostrev(\Datawalke\MainBundle\Entity\PostRev $postrevs)
    {
        $this->postrevs->removeElement($postrevs);
    }

    /**
     * Get postrevs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPostrevs()
    {
        return $this->postrevs;
    }

    /**
     * Add thumbs
     *
     * @param \Datawalke\MainBundle\Entity\Thumb $thumbs
     * @return User
     */
    public function addThumb(\Datawalke\MainBundle\Entity\Thumb $thumbs)
    {
        $this->thumbs[] = $thumbs;
    
        return $this;
    }

    /**
     * Remove thumbs
     *
     * @param \Datawalke\MainBundle\Entity\Thumb $thumbs
     */
    public function removeThumb(\Datawalke\MainBundle\Entity\Thumb $thumbs)
    {
        $this->thumbs->removeElement($thumbs);
    }

    /**
     * Get thumbs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getThumbs()
    {
        return $this->thumbs;
    }
}