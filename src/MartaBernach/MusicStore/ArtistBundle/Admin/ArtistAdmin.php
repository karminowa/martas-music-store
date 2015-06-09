<?php

namespace MartaBernach\MusicStore\ArtistBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArtistAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('slug')
            ->add('stageName', null, array(
                'label' => 'Pseudonim'
            ))
            ->add('firstName', null, array(
                'label' => 'Imię'
            ))
            ->add('lastName', null, array(
                'label' => 'Nazwisko'
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
            ->add('stageName', null, array(
                'label' => 'Pseudonim'
            ))
            ->add('firstName', null, array(
                'label' => 'Imię'
            ))
            ->add('lastName', null, array(
                'label' => 'Nazwisko'
            ))
            ->add('biography', null, array(
                'label' => 'Opis'
            ))
            ->add('createdAt', null, array(
                'label' => 'Utworzony'
            ))
            ->add('updatedAt', null, array(
                'label' => 'Aktualizowany'
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
            ->add('stageName', null, array(
                'required' => false,
                'label' => 'Pseudonim'
            ))
            ->add('firstName', null, array(
                'required' => true,
                'label' => 'Imię'
            ))
            ->add('lastName', null, array(
                'required' => true,
                'label' => 'Nazwisko'
            ))
            ->add('biography', 'textarea', array(
                'required' => false,
                'label' => 'Opis',
                'attr' => array(
                    'rows' => 15
                )
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
            ->add('stageName', null, array(
                'label' => 'Pseudonim'
            ))
            ->add('firstName', null, array(
                'label' => 'Imię'
            ))
            ->add('lastName', null, array(
                'label' => 'Nazwisko'
            ))
            ->add('biography', null, array(
                'label' => 'Opis'
            ))
            ->add('createdAt', null, array(
                'label' => 'Utworzony'
            ))
            ->add('updatedAt', null, array(
                'label' => 'Aktualizowany'
            ))
        ;
    }
}
