<?php

namespace MartaBernach\MusicStore\ArtistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtistPhoto
 */
class ArtistPhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $file;

    /**
     * @var integer
     */
    private $fileSize;

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
     * Set file
     *
     * @param string $file
     * @return ArtistPhoto
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     * @return ArtistPhoto
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set artist
     *
     * @param \MartaBernach\MusicStore\ArtistBundle\Entity\Artist $artist
     * @return ArtistPhoto
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
