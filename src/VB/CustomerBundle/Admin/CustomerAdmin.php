<?php

namespace VB\CustomerBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class CustomerAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstName')
            ->add('lastName')
            ->add('birthday')
            ->add('createdAt')
            ->add('updateAt')
            ->add('phoneNumberFixe')
            ->add('phoneNumberPortable')
            ->add('subscribeToNewsletter')
            ->add('email')
            ->add('siret')
            ->add('society')
            ->add('commercialName')
            ->add('headquarter')
            ->add('CPSociety')
            ->add('CitySociety')
            ->add('idCustomer')
            ->add('idCustomerAddress')
            ->add('idUser')
            ->add('idCustomerEntity')
            ->add('idContrat')


        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstName')
            ->add('lastName')
            ->add('birthday')
            ->add('createdAt')
            ->add('updateAt')
            ->add('phoneNumberFixe')
            ->add('phoneNumberPortable')
            ->add('subscribeToNewsletter')
            ->add('email')
            ->add('siret')
            ->add('society')
            ->add('commercialName')
            ->add('headquarter')
            ->add('CPSociety')
            ->add('CitySociety')
            ->add('idCustomer')
            ->add('idCustomerAddress')
            ->add('idUser')
            ->add('idCustomerEntity')
            ->add('idContrat')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('firstName')
            ->add('lastName')
            ->add('birthday')
            ->add('createdAt')
            ->add('updateAt')
            ->add('phoneNumberFixe')
            ->add('phoneNumberPortable')
            ->add('subscribeToNewsletter')
            ->add('email')
            ->add('siret')
            ->add('society')
            ->add('commercialName')
            ->add('headquarter')
            ->add('CPSociety')
            ->add('CitySociety')
            ->add('idCustomer')
            ->add('idCustomerAddress')
            ->add('idUser')
            ->add('idCustomerEntity')
            ->add('idContrat')
        ;
    }
}
