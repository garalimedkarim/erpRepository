<?php

namespace NotConnectedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NotConnectedBundle:Default:index.html.twig');
    }
}
