<?php

namespace API\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIInscriptionBundle:Default:index.html.twig');
    }
}
