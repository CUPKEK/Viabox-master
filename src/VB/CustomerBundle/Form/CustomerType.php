<?php

namespace VB\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\FileType;




class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use($options) {
            $idCustomerEntity= $event->getData();
            $form = $event->getForm();

            $form
                ->add('firstName',null,array ('label'=>'Prénom:'))
            ->add('lastName',null,array ('label'=>'Nom:'))
            ->add('birthday',null,array ('label'=>'Date de Naissance:'))
            ->add('createdAt')
            ->add('phoneNumberFixe',null,array ('label'=>'Téléphone fixe:'))
            ->add('phoneNumberPortable',null,array ('label'=>'Téléphone portable:'))
            ->add('subscribeToNewsletter',null,array ('label'=>'Souhaitez-vous recevoir la newsletter:'))
            ->add('email',null,array ('label'=>'Email:'));
            if ($idCustomerEntity->getIdCustomerEntity()=='1'|| '2')  {
                $form
                ->add('idCustomerAddress',  CustomerAddressType::class)
                    ->add('piece_identy',  FileType::class,array ('label'=>'justificatif identité:'))
                    ->add('status', FileType::class,array ('label'=>'Status de votre société:'))
                    ->add('kbis', FileType::class,array ('label'=>'Votre kbis:'))
                ->add('siret',null,array ('label'=>'Siret:'))
            ->add('society',null,array ('label'=>'Nom de la structure:'))
            ->add('commercialName',null,array ('label'=>'Nom commercial:'))
            ->add('headquarter',null,array ('label'=>'Siège social:'))
            ->add('CPSociety',null,array ('label'=>'Code Postal :'))
            ->add('CitySociety',null,array ('label'=>'Ville:'));
                    }
                    $form
            ->add('suivant',      SubmitType::class);
        });
    }



    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VB\CustomerBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'vb_customerbundle_customer';
    }


}
