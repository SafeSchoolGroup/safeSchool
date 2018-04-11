<?php

namespace SafeSchool\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SafeSchoolUserBundle:Default:index.html.twig');
    }
}
