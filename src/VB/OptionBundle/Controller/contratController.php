<?php
/**
 * Created by PhpStorm.
 * User: BASIRICO
 * Date: 11/06/2018
 * Time: 11:35
 */

namespace VB\OptionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\QueryBuilder;

class contratController extends Controller
{
    public function contratAction()
    {
        $repositoryAdresseDomiciliataire = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('VBOptionBundle:AdresseDomiciliataire')
        ;

        $AffCp = $repositoryAdresseDomiciliataire->findAll();
        $result = array();

        foreach ($AffCp as $codePostal) {
            // $advert est une instance de Advert
            array_push($result, array(
                'Code_Postal'   => $codePostal->getCodePostal(),
            ));
            // ...
        }


        $listPrix = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('VBOptionBundle:TypicalOffer')
            ->myFindDQL()
        ;
$prix=array();

        foreach ($listPrix as $results) {


           array_push($prix,array(
                'price_offer'=>$results
           ));
        }



return $this->render('@VBOption/Default/contrat.html.twig',array('listPrix' => $listPrix,'AffCp'=>$AffCp));
    }


}