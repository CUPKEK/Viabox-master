<?php

namespace VB\CustomerBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class CustomerOptionAdmin extends abstractadmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('priceCustomerOption')
            ->add('toDate')
            ->add('idCustomerOption')
            ->add('idDomiciliataire')
            ->add('idCustomer')
            ->add('idMail')
            ->add('idScan')
            ->add('idForm')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('priceCustomerOption')
            ->add('toDate')
            ->add('idCustomerOption')
            ->add('idDomiciliataire')
            ->add('idCustomer')
            ->add('idMail')
            ->add('idScan')
            ->add('idForm')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('priceCustomerOption')
            ->add('toDate')
            ->add('idCustomerOption')
            ->add('idDomiciliataire')
            ->add('idCustomer')
            ->add('idMail')
            ->add('idScan')
            ->add('idForm')
        ;
    }


}
