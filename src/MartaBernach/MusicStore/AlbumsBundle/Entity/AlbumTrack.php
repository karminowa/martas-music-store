<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlbumTrack
 */
class AlbumTrack
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
     * @var \DateTime
     */
    private $duration;

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var \MartaBernach\MusicStore\AlbumsBundle\Entity\Album
     */
    private $album;


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
     * @return AlbumTrack
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
     * Set duration
     *
     * @param \DateTime $duration
     * @return AlbumTrack
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return AlbumTrack
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set album
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\Album $album
     * @return AlbumTrack
     */
    public function setAlbum(\MartaBernach\MusicStore\AlbumsBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \MartaBernach\MusicStore\AlbumsBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     * @return AlbumTrack
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
