<?php

namespace MartaBernach\MusicStore\ArtistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MartaBernachMusicStoreArtistBundle:Default:index.html.twig', array('name' => $name));
    }
}
