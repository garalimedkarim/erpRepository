<?php

namespace NotConnectedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if (TRUE === $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            return $this->redirect($this->generateUrl('home_dashbord'));    
            	
        return $this->render('NotConnectedBundle:NotConnected:index.html.twig');
    }
}
