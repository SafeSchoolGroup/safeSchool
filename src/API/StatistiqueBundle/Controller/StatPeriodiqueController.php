<?php

namespace API\StatistiqueBundle\Controller;

use AppBundle\Entity\StatPeriodique;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Statperiodique controller.
 *
 */
class StatPeriodiqueController extends Controller
{
    /**
     * Lists all statPeriodique entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statPeriodiques = $em->getRepository('AppBundle:StatPeriodique')->findAll();

        return $this->render('APIStatistiqueBundle:statperiodique:index.html.twig', array(
            'statPeriodiques' => $statPeriodiques,
        ));
    }

    /**
     * Creates a new statPeriodique entity.
     *
     */
    public function newAction(Request $request)
    {
        $statPeriodique = new Statperiodique();
        $form = $this->createForm('AppBundle\Form\StatPeriodiqueType', $statPeriodique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($statPeriodique);
            $em->flush();

            return $this->redirectToRoute('statperiodique_show', array('id' => $statPeriodique->getId()));
        }

        return $this->render('APIStatistiqueBundle:statperiodique:new.html.twig', array(
            'statPeriodique' => $statPeriodique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a statPeriodique entity.
     *
     */
    public function showAction(StatPeriodique $statPeriodique)
    {
        $deleteForm = $this->createDeleteForm($statPeriodique);

        return $this->render('APIStatistiqueBundle:statperiodique:show.html.twig', array(
            'statPeriodique' => $statPeriodique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing statPeriodique entity.
     *
     */
    public function editAction(Request $request, StatPeriodique $statPeriodique)
    {
        $deleteForm = $this->createDeleteForm($statPeriodique);
        $editForm = $this->createForm('AppBundle\Form\StatPeriodiqueType', $statPeriodique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('statperiodique_edit', array('id' => $statPeriodique->getId()));
        }

        return $this->render('APIStatistiqueBundle:statperiodique:edit.html.twig', array(
            'statPeriodique' => $statPeriodique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a statPeriodique entity.
     *
     */
    public function deleteAction(Request $request, StatPeriodique $statPeriodique)
    {
        $form = $this->createDeleteForm($statPeriodique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($statPeriodique);
            $em->flush();
        }

        return $this->redirectToRoute('statperiodique_index');
    }

    /**
     * Creates a form to delete a statPeriodique entity.
     *
     * @param StatPeriodique $statPeriodique The statPeriodique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StatPeriodique $statPeriodique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('statperiodique_delete', array('id' => $statPeriodique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /* recuperation des statistiques periodiques d'un etablissement dans une anneeScolaire */
    public function getStatPeriodiqueOfEtsAction(Request $request){
      $annee = '2016-2017';
      $ets_id = $request->get('ets');
      $em = $this->getDoctrine()->getManager();
      $ets = $em->getRepository('AppBundle:Etablissement')->find($ets_id);
      $stat = $em->getRepository('AppBundle:StatPeriodique')->getStatPeriodiqueOfEts($ets,$annee);
      die(dump($stat));
    }

}
