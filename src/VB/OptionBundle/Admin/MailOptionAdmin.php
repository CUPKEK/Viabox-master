<?php

namespace VB\OptionBundle\Admin;

use Doctrine\ORM\Mapping as ORM;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class MailOptionAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idMail')
            ->add('prixMail')
            ->add('optionMail')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idMail')
            ->add('prixMail')
            ->add('optionMail')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('idMail')
            ->add('prixMail')
            ->add('optionMail')
        ;
    }

}
