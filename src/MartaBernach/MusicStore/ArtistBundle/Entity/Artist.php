<?php

namespace MartaBernach\MusicStore\ArtistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 */
class Artist
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $stageName;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $biography;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $band_member;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->band_member = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set stageName
     *
     * @param string $stageName
     * @return Artist
     */
    public function setStageName($stageName)
    {
        $this->stageName = $stageName;

        return $this;
    }

    /**
     * Get stageName
     *
     * @return string 
     */
    public function getStageName()
    {
        return $this->stageName;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Artist
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
     * Set firstName
     *
     * @param string $firstName
     * @return Artist
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Artist
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set biography
     *
     * @param string $biography
     * @return Artist
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
     * Add photos
     *
     * @param \MartaBernach\MusicStore\ArtistBundle\Entity\ArtistPhoto $photos
     * @return Artist
     */
    public function addPhoto(\MartaBernach\MusicStore\ArtistBundle\Entity\ArtistPhoto $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \MartaBernach\MusicStore\ArtistBundle\Entity\ArtistPhoto $photos
     */
    public function removePhoto(\MartaBernach\MusicStore\ArtistBundle\Entity\ArtistPhoto $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add band_member
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\BandMember $bandMember
     * @return Artist
     */
    public function addBandMember(\MartaBernach\MusicStore\BandBundle\Entity\BandMember $bandMember)
    {
        $this->band_member[] = $bandMember;

        return $this;
    }

    /**
     * Remove band_member
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\BandMember $bandMember
     */
    public function removeBandMember(\MartaBernach\MusicStore\BandBundle\Entity\BandMember $bandMember)
    {
        $this->band_member->removeElement($bandMember);
    }

    /**
     * Get band_member
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandMember()
    {
        return $this->band_member;
    }
}
