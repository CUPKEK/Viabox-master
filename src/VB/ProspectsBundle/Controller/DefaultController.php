<?php

namespace VB\ProspectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VBProspectsBundle:Default:index.html.twig');
    }
}
