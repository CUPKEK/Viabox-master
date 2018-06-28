<?php

namespace VB\ProductionBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idShipperAddress')
            ->add('idCustomer')
            ->add('idProduction')
            ->add('optionDelete')
            ->add('optionMail')
            ->add('optionScan')
            ->add('nbPages')
            ->add('poids')
            ->add('format')
            ->add('dateProcessing')
            ->add('dateReceipt')


        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idShipperAddress')
            ->add('idCustomer')
            ->add('idProduction')
            ->add('optionDelete')
            ->add('optionMail')
            ->add('optionScan')
            ->add('nbPages')
            ->add('poids')
            ->add('format')
            ->add('dateProcessing')
            ->add('dateReceipt')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idShipperAddress')
            ->add('idCustomer')
            ->add('idProduction')
            ->add('optionDelete')
            ->add('optionMail')
            ->add('optionScan')
            ->add('nbPages')
            ->add('poids')
            ->add('format')
            ->add('dateProcessing')
            ->add('dateReceipt')
        ;
    }

}
