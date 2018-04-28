<?php

namespace API\InfoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Avis;
use AppBundle\Form\AvisType;

/**
 * Avis controller.
 *
 */
class AvisController extends Controller
{
    /**
     * Lists all Avis entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $avis = $em->getRepository('AppBundle:Avis')->findAll();

        return $this->render('APIInfoBundle:avis:index.html.twig', array(
            'avis' => $avis,
        ));
    }

    /**
     * Creates a new Avis entity.
     *
     */
    public function newAction(Request $request)
    {
        $avi = new Avis();
        $form = $this->createForm('AppBundle\Form\AvisType', $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($avi);
            $em->flush();

            return $this->redirectToRoute('avis_show', array('id' => $avi->getId()));
        }

        return $this->render('APIInfoBundle:avis:new.html.twig', array(
            'avi' => $avi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Avis entity.
     *
     */
    public function showAction(Avis $avi)
    {
        $deleteForm = $this->createDeleteForm($avi);

        return $this->render('APIInfoBundle:avis:show.html.twig', array(
            'avi' => $avi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Avis entity.
     *
     */
    public function editAction(Request $request, Avis $avi)
    {
        $deleteForm = $this->createDeleteForm($avi);
        $editForm = $this->createForm('AppBundle\Form\AvisType', $avi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $avis->setUpdatedAt(new \DateTime('now'));

            $em->persist($avi);
            $em->flush();

            return $this->redirectToRoute('api_info_avis_edit', array('id' => $avi->getId()));
        }

        return $this->render('APIInfoBundle:avis:edit.html.twig', array(
            'avi' => $avi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Avis entity.
     *
     */
    public function deleteAction(Request $request, Avis $avi)
    {
        $form = $this->createDeleteForm($avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($avi);
            $em->flush();
        }

        return $this->redirectToRoute('api_info_avis_index');
    }

    /**
     * Creates a form to delete a Avis entity.
     *
     * @param Avis $avi The Avis entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Avis $avi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('api_info_avis_delete', array('id' => $avi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
