<?php

namespace API\EtablissementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIEtablissementBundle:Default:index.html.twig');
    }
}
