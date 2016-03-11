<?php

namespace Olivierlb73\MusicallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MusicallBundle:Default:index.html.twig', array('name' => $name));
    }
}
