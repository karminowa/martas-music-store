<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MartaBernachMusicStoreAlbumsBundle:Default:index.html.twig', array('name' => $name));
    }
}
