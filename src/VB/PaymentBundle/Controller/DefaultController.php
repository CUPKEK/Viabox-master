<?php

namespace VB\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VBPaymentBundle:Default:index.html.twig');
    }
}
