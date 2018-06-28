<?php

namespace VB\OptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VBOptionBundle:Default:index.html.twig');
    }
}
