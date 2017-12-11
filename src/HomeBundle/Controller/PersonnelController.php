<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Personnel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Personnel controller.
 *
 */
class PersonnelController extends Controller
{
    /**
     * Lists all personnel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personnels = $em->getRepository('HomeBundle:Personnel')->findAll();

        return $this->render('HomeBundle:Personnel:index.html.twig', array(
            'personnels' => $personnels,
        ));
    }

    /**
     * Creates a new personnel entity.
     *
     */
    public function newAction(Request $request)
    {
        $personnel = new Personnel();
        $form = $this->createForm('HomeBundle\Form\PersonnelType', $personnel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($personnel);
            $em->flush();

            return $this->redirectToRoute('personnel_show', array('id' => $personnel->getId()));
        }

        return $this->render('HomeBundle:Personnel:new.html.twig', array(
            'personnel' => $personnel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personnel entity.
     *
     */
    public function showAction(Personnel $personnel)
    {
        $deleteForm = $this->createDeleteForm($personnel);
        $form = $this->createForm('HomeBundle\Form\PersonnelType',$personnel);

        return $this->render('HomeBundle:Personnel:show.html.twig', array(
            'id' => $personnel->getId(),
            'delete_form' => $deleteForm->createView(),
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personnel entity.
     *
     */
    public function editAction(Request $request, Personnel $personnel)
    {
        $deleteForm = $this->createDeleteForm($personnel);
        $editForm = $this->createForm('HomeBundle\Form\PersonnelType', $personnel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personnel_show', array('id' => $personnel->getId()));
        }

        return $this->render('HomeBundle:Personnel:edit.html.twig', array(
            'personnel' => $personnel,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personnel entity.
     *
     */
    public function deleteAction(Request $request, Personnel $personnel)
    {
        $form = $this->createDeleteForm($personnel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personnel);
            $em->flush();
        }

        return $this->redirectToRoute('personnel_index');
    }

    /**
     * Creates a form to delete a personnel entity.
     *
     * @param Personnel $personnel The personnel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personnel $personnel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personnel_delete', array('id' => $personnel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
