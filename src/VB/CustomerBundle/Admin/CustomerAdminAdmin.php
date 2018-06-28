<?php

namespace VB\CustomerBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomerAdminAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('enable')
            ->add('login')
            ->add('emailVerificationToken')
            ->add('verifiedAt')
            ->add('expiredAt')
            ->add('password')
            ->add('passwordResetToken')
            ->add('passwordRequestedAt')
            ->add('idCustomerAdmin')
            ->add('idCustomer')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('enable')
            ->add('login')
            ->add('emailVerificationToken')
            ->add('verifiedAt')
            ->add('expiredAt')
            ->add('password')
            ->add('passwordResetToken')
            ->add('passwordRequestedAt')
            ->add('idCustomerAdmin')
            ->add('idCustomer')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('enable')
            ->add('login')
            ->add('emailVerificationToken')
            ->add('verifiedAt')
            ->add('expiredAt')
            ->add('password')
            ->add('passwordResetToken')
            ->add('passwordRequestedAt')
            ->add('idCustomerAdmin')
            ->add('idCustomer')
        ;
    }



}
