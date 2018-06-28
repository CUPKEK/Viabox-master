<?php

namespace VB\OptionBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdresseDomiciliataireAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titleD')
            ->add('addressD')
            ->add('address2D')
            ->add('countryD')
            ->add('cityD')
            ->add('codePostal')
            ->add('siret')
            ->add('codeNaf')
            ->add('codeApe')
            ->add('numeroTel')
            ->add('idDomiciliataire')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titleD')
            ->add('addressD')
            ->add('address2D')
            ->add('countryD')
            ->add('cityD')
            ->add('codePostal')
            ->add('siret')
            ->add('codeNaf')
            ->add('codeApe')
            ->add('numeroTel')
            ->add('idDomiciliataire')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('titleD')
            ->add('addressD')
            ->add('address2D')
            ->add('countryD')
            ->add('cityD')
            ->add('codePostal')
            ->add('siret')
            ->add('codeNaf')
            ->add('codeApe')
            ->add('numeroTel')
            ->add('idDomiciliataire')
        ;
    }
}
