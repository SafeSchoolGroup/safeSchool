<?php

namespace API\ProgrammeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIProgrammeBundle:Default:index.html.twig');
    }
}
