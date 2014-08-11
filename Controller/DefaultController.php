<?php

namespace CL\Bundle\DocDataOrderApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CLDocDataOrderApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
