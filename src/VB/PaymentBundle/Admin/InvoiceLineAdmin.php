<?php

namespace VB\PaymentBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class InvoiceLineAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idInvoices')
            ->add('idProduction')
            ->add('idLine')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idInvoices')
            ->add('idProduction')
            ->add('idLine')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idInvoices')
            ->add('idProduction')
            ->add('idLine')
        ;
    }
}
