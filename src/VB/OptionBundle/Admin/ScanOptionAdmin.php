<?php

namespace VB\OptionBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ScanOptionAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idScan')
            ->add('prixScan')
            ->add('optionScan')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idScan')
            ->add('prixScan')
            ->add('optionScan')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idScan')
            ->add('prixScan')
            ->add('optionScan')
        ;
    }

}
