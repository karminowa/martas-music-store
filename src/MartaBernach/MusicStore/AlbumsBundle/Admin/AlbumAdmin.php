<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AlbumAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('slug')
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('releaseDate', null, array(
                'label' => 'Rok wydania'
            ))
            ->add('summary', null, array(
                'label' => 'Opis'
            ))
            ->add('genres', null, array(
                'label' => 'Gatunek'
            ));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('slug')
            ->add('band', null, array(
                'label' => 'Zespół'
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('releaseDate', null, array(
                'label' => 'Rok wydania'
            ))
            ->add('summary', null, array(
                'label' => 'Opis'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('band', null, array(
                'label' => 'Zespół'
            ))
            ->add('name', null, array(
                'required' => true,
                'label' => 'Nazwa'
            ))
            ->add('releaseDate', 'date', array(
                'required' => true,
                'label' => 'Rok wydania',
                'widget' => 'single_text',
                'years' => range(1000, 2500)
            ))
            ->add('summary', 'textarea', array(
                'required' => false,
                'label' => 'Opis'
            ))
            ->add('genres', null, array(
                'required' => false,
                'label' => 'Gatunki'
            ))
            ->add('tracks', 'sonata_type_collection', array(
                'label' => 'Piosenki'
            ), array(
                'edit' => 'inline',
                'inline' => 'table'
            ));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('slug')
            ->add('band', null, array(
                'label' => 'Zespół'
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('releaseDate', null, array(
                'label' => 'Rok wydania'
            ))
            ->add('summary', null, array(
                'label' => 'Opis'
            ))
            ->add('genres', null, array(
                'label' => 'Gatunki'
            ))
            ->add('tracks', null, array(
                'label' => 'Piosenki'
            ))
            ->add('createdAt', null, array(
                'label' => 'Dodano'
            ))
            ->add('updatedAt', null, array(
                'label' => 'Aktualizowano'
            ));
    }

    public function prePersist($object)
    {
        $name = trim($object->getName());
        if($name === '?') {
            $object->setSlug('question-mark');
        }
        $tracks = $object->getTracks();
        if (!empty($tracks)) {
            foreach ($tracks as $track) {
                $track->setAlbum($object);
            }
        }
    }

    public function preUpdate($object)
    {
        $name = trim($object->getName());
        if($name === '?') {
            $object->setSlug('question-mark');
        }
        $tracks = $object->getTracks();
        if (!empty($tracks)) {
            foreach ($tracks as $track) {
                $track->setAlbum($object);
            }
        }
    }
}
