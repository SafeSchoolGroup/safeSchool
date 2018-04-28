<?php

namespace API\StatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIStatistiqueBundle:Default:index.html.twig');
    }
}
