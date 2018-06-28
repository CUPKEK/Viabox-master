<?php

namespace VB\ProductionBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ShipperAddressAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idShipperAddress')
            ->add('codePostalS')
            ->add('cityS')
            ->add('countryS')
            ->add('additionaladdressS')
            ->add('addressS')
            ->add('titleShipper')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idShipperAddress')
            ->add('codePostalS')
            ->add('cityS')
            ->add('countryS')
            ->add('additionaladdressS')
            ->add('addressS')
            ->add('titleShipper')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idShipperAddress')
            ->add('codePostalS')
            ->add('cityS')
            ->add('countryS')
            ->add('additionaladdressS')
            ->add('addressS')
            ->add('titleShipper')
        ;
    }
}
