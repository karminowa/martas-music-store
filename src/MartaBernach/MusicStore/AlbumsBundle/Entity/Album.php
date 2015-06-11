<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 */
class Album
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
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tracks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $covers;

    /**
     * @var \MartaBernach\MusicStore\BandBundle\Entity\Band
     */
    private $band;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tracks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->covers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Album
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
     * @return Album
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
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return Album
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Album
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Album
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
     * @return Album
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

    /**
     * Add tracks
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumTrack $tracks
     * @return Album
     */
    public function addTrack(\MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumTrack $tracks)
    {
        $this->tracks[] = $tracks;

        return $this;
    }

    /**
     * Remove tracks
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumTrack $tracks
     */
    public function removeTrack(\MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumTrack $tracks)
    {
        $this->tracks->removeElement($tracks);
    }

    /**
     * Get tracks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Add covers
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumCover $covers
     * @return Album
     */
    public function addCover(\MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumCover $covers)
    {
        $this->covers[] = $covers;

        return $this;
    }

    /**
     * Remove covers
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumCover $covers
     */
    public function removeCover(\MartaBernach\MusicStore\AlbumsBundle\Entity\AlbumCover $covers)
    {
        $this->covers->removeElement($covers);
    }

    /**
     * Get covers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCovers()
    {
        return $this->covers;
    }

    /**
     * Set band
     *
     * @param \MartaBernach\MusicStore\BandBundle\Entity\Band $band
     * @return Album
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $genres;


    /**
     * Add genres
     *
     * @param \MartaBernach\MusicStore\GenresBundle\Entity\Genre $genres
     * @return Album
     */
    public function addGenre(\MartaBernach\MusicStore\GenresBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \MartaBernach\MusicStore\GenresBundle\Entity\Genre $genres
     */
    public function removeGenre(\MartaBernach\MusicStore\GenresBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }
}
