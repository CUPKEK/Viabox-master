<?php

namespace VB\CustomerBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ContratAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('startDateContrat')
            ->add('endDateContrat')
            ->add('priceContrat')
            ->add('enableContrat')
            ->add('idContrat')
            ->add('idCustomerOption')
            ->add('idCustomer');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('startDateContrat')
            ->add('endDateContrat')
            ->add('priceContrat')
            ->add('enableContrat')
            ->add('idContrat')
            ->add('idCustomerOption')
            ->add('idCustomer');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('startDateContrat')
            ->add('endDateContrat')
            ->add('priceContrat')
            ->add('enableContrat')
            ->add('idContrat')
            ->add('idCustomerOption')
            ->add('idCustomer');
    }

}
