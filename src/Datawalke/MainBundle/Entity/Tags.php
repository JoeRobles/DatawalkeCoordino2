<?php

namespace Datawalke\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Datawalke\MainBundle\Repository\TagsRepository")
 */
class Tags
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
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;


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
     * Set tag
     *
     * @param string $tag
     * @return Tags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Tags
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
