<?php

namespace API\MediathequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIMediathequeBundle:Default:index.html.twig');
    }

}
