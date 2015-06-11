<?php

namespace MartaBernach\MusicStore\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public $bands;

    public function indexAction()
    {
        $this->setDefaults();
        return $this->render('MartaBernachMusicStoreFrontendBundle:Main:index.html.twig', array('bands' => $this->bands));
    }

    public function bandAction($slug)
    {
        $this->setDefaults();

        $band = $this->getDoctrine()->getRepository('MartaBernachMusicStoreBandBundle:Band')->findOneBy(array('slug' => $slug));
        return $this->render('MartaBernachMusicStoreFrontendBundle:Main:band.html.twig', array('bands' => $this->bands, 'band' => $band));
    }

    public function albumAction($slug)
    {
        $this->setDefaults();

        if (!empty($slug)) {
            $slug = str_replace('.', '/', $slug);
        }

        $album = $this->getDoctrine()->getRepository('MartaBernachMusicStoreAlbumsBundle:Album')->findOneBy(array('slug' => $slug));
        return $this->render('MartaBernachMusicStoreFrontendBundle:Main:album.html.twig', array('bands' => $this->bands, 'album' => $album));
    }

    private function setDefaults()
    {
        $this->bands = $this->getDoctrine()->getRepository('MartaBernachMusicStoreBandBundle:Band')->findAll();
    }
}
