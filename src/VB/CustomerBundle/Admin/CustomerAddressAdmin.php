<?php

namespace VB\CustomerBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CustomerAddressAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('addressC')
            ->add('address2C')
            ->add('countryC')
            ->add('cityC')
            ->add('codePostalC')
            ->add('activeAdress')
            ->add('idCustomerAddress')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('addressC')
            ->add('address2C')
            ->add('countryC')
            ->add('cityC')
            ->add('codePostalC')
            ->add('activeAdress')
            ->add('idCustomerAddress')

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('addressC')
            ->add('address2C')
            ->add('countryC')
            ->add('cityC')
            ->add('codePostalC')
            ->add('activeAdress')
            ->add('idCustomerAddress')

        ;
    }


}
