<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlbumCover
 */
class AlbumCover
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
    private $size;

    /**
     * @var string
     */
    private $type;

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
     * Set file
     *
     * @param string $file
     * @return AlbumCover
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
     * Set size
     *
     * @param integer $size
     * @return AlbumCover
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AlbumCover
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
     * Set album
     *
     * @param \MartaBernach\MusicStore\AlbumsBundle\Entity\Album $album
     * @return AlbumCover
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
}
