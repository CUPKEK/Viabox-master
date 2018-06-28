<?php

namespace VB\PaymentBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PaymentAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idInvoices')
            ->add('idTypePayment')
            ->add('idCustomer')
            ->add('idBank')
            ->add('idPayment')
            ->add('amount')
            ->add('numTransaction')
            ->add('datePayment')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idInvoices')
            ->add('idTypePayment')
            ->add('idCustomer')
            ->add('idBank')
            ->add('idPayment')
            ->add('amount')
            ->add('numTransaction')
            ->add('datePayment')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idInvoices')
            ->add('idTypePayment')
            ->add('idCustomer')
            ->add('idBank')
            ->add('idPayment')
            ->add('amount')
            ->add('numTransaction')
            ->add('datePayment')
        ;
    }
}
