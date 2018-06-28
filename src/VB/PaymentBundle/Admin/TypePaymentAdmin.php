<?php

namespace VB\PaymentBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TypePaymentAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idTypePayment')
            ->add('typePayment')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idTypePayment')
            ->add('typePayment')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idTypePayment')
            ->add('typePayment')
        ;
    }
}
