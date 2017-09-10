<?php

namespace NotConnectedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NotConnectedBundle:NotConnected:index.html.twig');
    }
}
