<?php

namespace VB\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VBCustomerBundle:Default:index.html.twig');
    }
}
