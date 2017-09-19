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
# creating form 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FournisseurController extends Controller
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

    public function addFournisseurAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		
		$fournisseur = new Fournisseur();
		
		$form = $this->createFormBuilder($fournisseur)
			->add('nom_fournisseur', TextType::class)
			->add('adresse', TextType::class)
			->add('ville', TextType::class)
			->add('save', SubmitType::class, array('label' => 'Créer Fournisseur','attr'=>array('class'=>'btn btn-primary','style'=>'float:right')))
			->getForm();
			
		$form->handleRequest($request);
			
		if( $form->isSubmitted() && $form->isValid() ){
			$nom_fournisseur = $form['nom_fournisseur']->getData();
			$adresse = $form['adresse']->getData();
			$ville = $form['ville']->getData();
			
			$fournisseur->setNomFournisseur($nom_fournisseur);
			$fournisseur->setAdresse($adresse);
			$fournisseur->setVille($ville);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($fournisseur);
			$em->flush();
			
			$this->addFlash('notice','Fournisseur ajouté avec succés');
			
			return $this->redirectToRoute('home_fournisseurs');
		}
				
			
		return $this->render('HomeBundle:Default:addFournisseur.html.twig',array('form'=>$form->createView()));
    }	
}
