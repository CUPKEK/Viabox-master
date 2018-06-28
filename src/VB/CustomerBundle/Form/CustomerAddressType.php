<?php

namespace VB\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerAddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addressC' ,null,array ('label'=>'Votre adresse:'))
            ->add('address2C' ,null,array ('label'=>'Complément adresse:'))
            ->add('countryC',null,array ('label'=>'Pays:'))
            ->add('cityC' ,null,array ('label'=>'Ville:'))
            ->add('codePostalC' ,null,array ('label'=>'Code postal:'))
            ->add('activeAdress' ,null,array ('label'=>'Activer cette adresse'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VB\CustomerBundle\Entity\CustomerAddress'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'vb_customerbundle_customeraddress';
    }


}
