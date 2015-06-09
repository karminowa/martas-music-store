<?php

namespace MartaBernach\MusicStore\BandBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BandAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('slug')
            ->add('formed')
            ->add('originCountry')
            ->add('originCity')
            ->add('biography')
            ->add('createdAt')
            ->add('updatedAt');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('slug')
            ->add('formed', null, array(
                'label' => 'Rok założenia'
            ))
            ->add('originCountry', null, array(
                'label' => 'Kraj Pochodzenia'
            ))
            ->add('originCity', null, array(
                'label' => 'Miejsce Pochodzenia'
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
            ->add('name', null, array(
                'required' => true,
                'label' => 'Nazwa',
                'attr' => array(
                    'maxlength' => 2
                )
            ))
            ->add('formed', null, array(
                'required' => true,
                'label' => 'Rok założenia',
                'attr' => array(
                    'min' => 1000,
                    'max' => 2500,
                    'pattern' => '[0-9]{4}',
                    'maxlength' => 4
                )
            ))
            ->add('originCountry', null, array(
                'required' => true,
                'label' => 'Kraj Pochodzenia',
                'attr' => array(
                    'maxlength' => 3
                )
            ))
            ->add('originCity', null, array(
                'required' => true,
                'label' => 'Miejsce Pochodzenia',
                'attr' => array(
                    'maxlength' => 3
                )
            ))
            ->add('biography', 'textarea', array(
                'label' => 'Opis',
                'attr' => array(
                    'rows' => 15
                )
            ))
            ->add('members', 'sonata_type_collection', array(
                'required' => false,
                'label' => 'Członkowie zespołu'
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
            ->add('name', null, array(
                'label' => 'Nazwa'
            ))
            ->add('slug')
            ->add('formed', null, array(
                'label' => 'Kraj Pochodzenia'
            ))
            ->add('originCountry', null, array(
                'label' => 'Kraj Pochodzenia'
            ))
            ->add('originCity', null, array(
                'label' => 'Miejsce Pochodzenia'
            ))
            ->add('biography', null, array(
                'label' => 'Opis'
            ))
            ->add('members', null, array(
                'label' => 'Członkowie'
            ))
            ->add('createdAt', null, array(
                'label' => 'Utworzony'
            ))
            ->add('updatedAt', null, array(
                'label' => 'Aktualizowany'
            ));
    }

    public function prePersist($object)
    {
        $members = $object->getMembers();
        if (!empty($members)) {
            foreach ($members as $member) {
                $member->setBand($object);
            }
        }
    }

    public function preUpdate($object)
    {
        $members = $object->getMembers();
        if (!empty($members)) {
            foreach ($members as $member) {
                $member->setBand($object);
            }
        }
    }
}
