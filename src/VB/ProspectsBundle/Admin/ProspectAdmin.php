<?php

namespace VB\ProspectsBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProspectAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idDomiciliataire')
            ->add('idProspect')
            ->add('typeEntityP')
            ->add('cityP')
            ->add('countryP')
            ->add('address2P')
            ->add('addressP')
            ->add('emailP')
            ->add('phoneNumberPortableP')
            ->add('phoneNumberFixeP')
            ->add('birthdayP')
            ->add('lastNameP')
            ->add('firstNameP')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idDomiciliataire')
            ->add('idProspect')
            ->add('typeEntityP')
            ->add('cityP')
            ->add('countryP')
            ->add('address2P')
            ->add('addressP')
            ->add('emailP')
            ->add('phoneNumberPortableP')
            ->add('phoneNumberFixeP')
            ->add('birthdayP')
            ->add('lastNameP')
            ->add('firstNameP')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idDomiciliataire')
            ->add('idProspect')
            ->add('typeEntityP')
            ->add('cityP')
            ->add('countryP')
            ->add('address2P')
            ->add('addressP')
            ->add('emailP')
            ->add('phoneNumberPortableP')
            ->add('phoneNumberFixeP')
            ->add('birthdayP')
            ->add('lastNameP')
            ->add('firstNameP')
        ;
    }


}
