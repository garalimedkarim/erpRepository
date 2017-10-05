<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Fournisseur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
# getting USER :
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Fournisseur controller.
 *
 */
class FournisseurController extends Controller
{
    /**
     * Lists all fournisseur entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }        

        $em = $this->getDoctrine()->getManager();

        $fournisseurs = $em->getRepository('HomeBundle:Fournisseur')->findAll();

        return $this->render('HomeBundle:Fournisseur:indexFournisseur.html.twig', array(
            'fournisseurs' => $fournisseurs,
        ));
    }

    /**
     * Creates a new fournisseur entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $fournisseur = new Fournisseur();
        $form = $this->createForm('HomeBundle\Form\FournisseurType', $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($fournisseur);
            $em->flush();

            return $this->redirectToRoute('fournisseur_show', array('id' => $fournisseur->getId()));
        }

        return $this->render('HomeBundle:Fournisseur:new.html.twig', array(
            'fournisseur' => $fournisseur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fournisseur entity.
     *
     */
    public function showAction(Fournisseur $fournisseur)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->createForm('HomeBundle\Form\FournisseurType',$fournisseur);
        $deleteForm = $this->createDeleteForm($fournisseur);

        return $this->render('HomeBundle:Fournisseur:show.html.twig', array(
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
            'id' => $fournisseur->getId()
        ));
    }

    /**
     * Displays a form to edit an existing fournisseur entity.
     *
     */
    public function editAction(Request $request, Fournisseur $fournisseur)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $deleteForm = $this->createDeleteForm($fournisseur);
        $editForm = $this->createForm('HomeBundle\Form\FournisseurType', $fournisseur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fournisseur_show', array('id' => $fournisseur->getId()));
        }

        return $this->render('HomeBundle:Fournisseur:edit.html.twig', array(
            'fournisseur' => $fournisseur,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fournisseur entity.
     *
     */
    public function deleteAction(Request $request, Fournisseur $fournisseur)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->createDeleteForm($fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('fournisseur_index');
    }

    /**
     * Creates a form to delete a fournisseur entity.
     *
     * @param Fournisseur $fournisseur The fournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fournisseur $fournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fournisseur_delete', array('id' => $fournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
