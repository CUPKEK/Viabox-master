<?php

namespace VB\CustomerBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class HistoricConnexionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('dateConnexion')
            ->add('idConnexion')
            ->add('idCustomerAdmin')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('dateConnexion')
            ->add('idConnexion')
            ->add('idCustomerAdmin')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('dateConnexion')
            ->add('idConnexion')
            ->add('idCustomerAdmin')
        ;
    }


}
