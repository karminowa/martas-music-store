<?php

namespace MartaBernach\MusicStore\BandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BandMember
 */
class BandMember
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $role;

    /**
     * @var boolean
     */
    private $former;

    /**
     * @var \MartaBernach\MusicStore\BandBundle\Entity\Band
     */
    private $band;

    /**
     * @var \MartaBernach\MusicStore\ArtistBundle\Entity\Artist
     */
    private $artist;


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
     * Set role
     *
     * @param string $role
     * @return BandMember
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set former
     *
     * @param boolean $former
     * @return BandMember
     */
    public function setFormer($former)
    {
        $this->former = $former;

        return $this;
    }

    /**
     * Get former
     *
     * @return boolean 
     */
    public function getFormer()
    {
        return $this->former;
    }

    /**
     * Set band
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\Band $band
     * @return BandMember
     */
    public function setBand(\MartaBernach\MusicStore\BandBundle\Entity\Band $band = null)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return \MartaBernach\MusicStore\BandBundle\Entity\Band 
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set artist
     *
     * @param \MartaBernach\MusicStore\ArtistBundle\Entity\Artist $artist
     * @return BandMember
     */
    public function setArtist(\MartaBernach\MusicStore\ArtistBundle\Entity\Artist $artist = null)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return \MartaBernach\MusicStore\ArtistBundle\Entity\Artist 
     */
    public function getArtist()
    {
        return $this->artist;
    }
}
