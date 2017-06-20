<?php

namespace Esprit\NaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritNaoBundle:Default:index.html.twig', array('name' => $name));
    }
}
