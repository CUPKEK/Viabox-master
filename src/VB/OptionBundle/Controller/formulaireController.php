<?php
/**
 * Created by PhpStorm.
 * User: BASIRICO
 * Date: 14/06/2018
 * Time: 13:20
 */

namespace VB\OptionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VB\CustomerBundle\Entity\Customer;
use VB\CustomerBundle\Entity\CustomerAddress;
use VB\CustomerBundle\Form\CustomerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use VB\OptionBundle\Entity\FormEntity;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormBuilder;



class formulaireController extends Controller
{

    public function addAction(Request $request)
    {
        $customer = new Customer();
        $customer->setCreatedAt(new \Datetime());
        $form = $this->get('form.factory')->create(CustomerType::class, $customer);
        if ($request->isMethod('POST')) {

            $form->handleRequest($request);


            if ($form->isValid()) {

                $customer->getPieceIdenty();
                $customer->getStatus();
                $customer->getKbis();

                $em = $this->getDoctrine()->getManager();
                $em->persist($customer);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistrée.');

                // On redirige vers la page de visualisation de l'annonce nouvellement créée
                return $this->redirectToRoute('vb_option_homepage', array('id' => $customer->getIdCustomer(),'id_entity'=>$customer->getIdCustomerEntity()));
            }
        }


        return $this->render('@VBOption/Default/donnes.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}       