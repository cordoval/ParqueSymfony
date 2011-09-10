<?php

namespace Acme\ParqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WelcomeController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('AcmeParqueBundle:Parque:index.html.twig');
    }
}
