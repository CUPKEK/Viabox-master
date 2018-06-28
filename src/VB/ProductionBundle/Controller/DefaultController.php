<?php

use Doctrine\ORM\QueryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProductionRepository extends \Doctrine\ORM\EntityRepository
{
	public function afficheProduction()
    {
        $repositoryProduction = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('VBProductionBundle:Production')
        ;

        $Affprod = $repositoryProduction->findAll();
        $result = array();

        foreach ($Affprod as $Production) {
            // $advert est une instance de Advert
            array_push($result, array(
                'Production'   => $Production->getProduction(),
            ));
            // ...
        }


        $listProduction = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('VBProductionBundle:Production')
            ->myFindDQL()
        ;
$Production=array();

        foreach ($listProduction as $results) {


           array_push($Production,array(
                'KEK'=>$results
           ));
        }



return $this->render('@Via:homeBundle:Resources:views:Default:interfaceclient.html.twig',array('listProduction' => $listProduction,'AffCp'=>$AffProd));
    }
}