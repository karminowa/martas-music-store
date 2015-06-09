<?php

namespace MartaBernach\MusicStore\AlbumsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use DateTime;

class AlbumTrackAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('slug')
            ->add('rank', null, array(
                'label' => 'Numer na liście'
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('duration', null, array(
                'label' => 'Czas trwania'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('slug')
            ->add('rank', null, array(
                'label' => 'Numer na liście'
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('duration', null, array(
                'label' => 'Czas trwania'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('rank', null, array(
                'label' => 'Numer na liście',
                'attr' => array(
                    'min' => 1,
                    'max' => 99
                )
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('duration', null, array(
                'label' => 'Czas trwania',
                'widget' => 'single_text',
                'with_minutes' => true,
                'with_seconds' => true
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('slug')
            ->add('rank', null, array(
                'label' => 'Numer na liście'
            ))
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('duration', 'time', array(
                'label' => 'Czas trwania'
            ))
        ;
    }

    public function getNewInstance()
    {
        $instance = parent::getNewInstance();
        $instance->setRank(1);

        return $instance;
    }
}
