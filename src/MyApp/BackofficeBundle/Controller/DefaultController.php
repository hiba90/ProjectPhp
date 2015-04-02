<?php

namespace MyApp\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppBackofficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
