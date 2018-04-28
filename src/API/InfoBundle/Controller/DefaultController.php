<?php

namespace API\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIInfoBundle:Default:index.html.twig');
    }
}
