<?php

namespace VB\PaymentBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class InvoicesAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idLine')
            ->add('idPayment')
            ->add('idContrat')
            ->add('idInvoices')
            ->add('debit')
            ->add('pdfInvoice')
            ->add('sum')
            ->add('dateInvoices')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idLine')
            ->add('idPayment')
            ->add('idContrat')
            ->add('idInvoices')
            ->add('debit')
            ->add('pdfInvoice')
            ->add('sum')
            ->add('dateInvoices')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idLine')
            ->add('idPayment')
            ->add('idContrat')
            ->add('idInvoices')
            ->add('debit')
            ->add('pdfInvoice')
            ->add('sum')
            ->add('dateInvoices')
        ;
    }
}
