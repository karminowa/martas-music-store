<?php

namespace MartaBernach\MusicStore\BandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 */
class Band
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $formed;

    /**
     * @var string
     */
    private $originCountry;

    /**
     * @var string
     */
    private $originCity;

    /**
     * @var string
     */
    private $biography;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $albums;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $members;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->albums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Band
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
     * Set slug
     *
     * @param string $slug
     * @return Band
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

    /**
     * Set formed
     *
     * @param integer $formed
     * @return Band
     */
    public function setFormed($formed)
    {
        $this->formed = $formed;

        return $this;
    }

    /**
     * Get formed
     *
     * @return integer 
     */
    public function getFormed()
    {
        return $this->formed;
    }

    /**
     * Set originCountry
     *
     * @param string $originCountry
     * @return Band
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;

        return $this;
    }

    /**
     * Get originCountry
     *
     * @return string 
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Set originCity
     *
     * @param string $originCity
     * @return Band
     */
    public function setOriginCity($originCity)
    {
        $this->originCity = $originCity;

        return $this;
    }

    /**
     * Get originCity
     *
     * @return string 
     */
    public function getOriginCity()
    {
        return $this->originCity;
    }

    /**
     * Set biography
     *
     * @param string $biography
     * @return Band
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography
     *
     * @return string 
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Add albums
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\Album $albums
     * @return Band
     */
    public function addAlbum(\MartaBernach\MusicStore\AlbumsBundle\Entity\Album $albums)
    {
        $this->albums[] = $albums;

        return $this;
    }

    /**
     * Remove albums
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\Album $albums
     */
    public function removeAlbum(\MartaBernach\MusicStore\AlbumsBundle\Entity\Album $albums)
    {
        $this->albums->removeElement($albums);
    }

    /**
     * Get albums
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Add members
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\BandMember $members
     * @return Band
     */
    public function addMember(\MartaBernach\MusicStore\BandBundle\Entity\BandMember $members)
    {
        $this->members[] = $members;

        return $this;
    }

    /**
     * Remove members
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\BandMember $members
     */
    public function removeMember(\MartaBernach\MusicStore\BandBundle\Entity\BandMember $members)
    {
        $this->members->removeElement($members);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Band
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Band
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function __toString() {
        return $this->getName();
    }
}
