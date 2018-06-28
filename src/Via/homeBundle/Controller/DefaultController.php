<?php

namespace Via\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('@Viahome/Default/index.html.twig');
    }


    public function viewAction()
    {
        return $this->render('@Viahome/Default/view.html.twig');
    }

    public function connectAction()
    {
        return $this->render('@Viahome/Default/connection.html.twig');
    }

    public function contratAction()
    {
        return $this->render('@Viahome/Default/contrat.html.twig');
    }
    public function donnesAction()
{
    return $this->render('@Viahome/Default/donnes.html.twig');
}

    public function etapeAction()
    {
        return $this->render('@Viahome/Default/etape.html.twig');
    }

    public function formassosAction()
    {
        return $this->render('@Viahome/Default/formassos.html.twig');
    }
    public function formentrepAction()
    {
        return $this->render('@Viahome/Default/formentrep.html.twig');
    }
    public function formpartAction()
    {
        return $this->render('@Viahome/Default/formpart.html.twig');
    }

    public function interfclientAction()
    {
        return $this->render('@Viahome/Default/interfaceclient.html.twig');
    }
    public function profilAction()
    {
        return $this->render('@Viahome/Default/profil.html.twig');
    }
    public function contactAction()
    {
        return $this->render('@Viahome/Default/contact.html.twig');
    }
}
