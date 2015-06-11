<?php

namespace MartaBernach\MusicStore\GenresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MartaBernachMusicStoreGenresBundle:Default:index.html.twig', array('name' => $name));
    }
}
