<?php

namespace API\StatistiqueBundle\Controller;

use AppBundle\Entity\Examen;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examan controller.
 *
 */
class ExamenController extends Controller
{
    /**
     * Lists all examan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examens = $em->getRepository('AppBundle:Examen')->findAll();

        return $this->render('APIStatistiqueBundle:examen:index.html.twig', array(
            'examens' => $examens,
        ));
    }

    /**
     * Creates a new examan entity.
     *
     */
    public function newAction(Request $request)
    {
        $examan = new Examen();
        $form = $this->createForm('AppBundle\Form\ExamenType', $examan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($examan);
            $em->flush();

            return $this->redirectToRoute('examen_show', array('id' => $examan->getId()));
        }

        return $this->render('APIStatistiqueBundle:examen:new.html.twig', array(
            'examan' => $examan,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a examan entity.
     *
     */
    public function showAction(Examen $examan)
    {
        $deleteForm = $this->createDeleteForm($examan);

        return $this->render('APIStatistiqueBundle:examen:show.html.twig', array(
            'examan' => $examan,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing examan entity.
     *
     */
    public function editAction(Request $request, Examen $examan)
    {
        $deleteForm = $this->createDeleteForm($examan);
        $editForm = $this->createForm('AppBundle\Form\ExamenType', $examan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('examen_edit', array('id' => $examan->getId()));
        }

        return $this->render('APIStatistiqueBundle:examen:edit.html.twig', array(
            'examan' => $examan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a examan entity.
     *
     */
    public function deleteAction(Request $request, Examen $examan)
    {
        $form = $this->createDeleteForm($examan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examan);
            $em->flush();
        }

        return $this->redirectToRoute('examen_index');
    }

    /**
     * Creates a form to delete a examan entity.
     *
     * @param Examen $examan The examan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Examen $examan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examen_delete', array('id' => $examan->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function getExamenOfEtsAction(Request $request){
        $annee = '2016-2017';
        $ets_id = $request->get('ets');
        $em = $this->getDoctrine()->getManager();
        $ets = $em->getRepository('AppBundle:Etablissement')->find($ets_id);
        $stat = $em->getRepository('AppBundle:Examen')->getExamen($ets,$annee);
        die(dump($stat));

    }

}
