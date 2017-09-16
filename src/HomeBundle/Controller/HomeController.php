<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
# getting USER :
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
# fetching from Database
use HomeBundle\Entity\Fournisseur;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;


class HomeController extends Controller
{
    public function homeAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }		
		
        return $this->render('HomeBundle:Default:home.html.twig');
    }
	
    public function dashbordAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }		
		
        return $this->render('HomeBundle:Default:dashbord.html.twig');
    }

    public function fournisseurAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

		$repository = $this->getDoctrine()->getRepository(Fournisseur::class);
		$fournisseurs = $repository->findAll();
		
		
        return $this->render('HomeBundle:Default:fournisseur.html.twig',array('fournisseurs'=>$fournisseurs));
    }
}
