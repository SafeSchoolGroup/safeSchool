<?php

namespace API\InfoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;

use AppBundle\Entity\Information;
use AppBundle\Form\InformationType;

use AppBundle\Entity\Fichier;
use AppBundle\Entity\Etablissement;
use API\InfoBundle\Event\OnPublieEvent;
use API\InfoBundle\Event\InformationEvents;
use API\InfoBundle\Listener\DatePublication;


/**
 * Information controller.
 *
 */
class InformationController extends Controller
{
    /**
     * Lists all Information entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('AppBundle:Information')->findAll();
        return $this->render('APIInfoBundle:information:index.html.twig', array(
            'information' => $information,
        ));
    }

    /**
     * Creates a new Information entity.
     *
     */
    public function newAction(Request $request)
    {
        $information = new Information();
        $form = $this->createForm('AppBundle\Form\InformationType', $information);
        $form->handleRequest($request);
        $information->setDestinataire($request->get('destinataire'));

        $em = $this->getDoctrine()->getManager();
        $ets = $em->getRepository('AppBundle:Etablissement')->findById(1);

        if ($ets != null ){
            $information->setEtablissement($ets[0]);
        }

        $sousClasses = array();

        // recuperation de toutes les classes
        $classes = $em->getRepository('AppBundle:Classe')->findAll();
        // recperation des SousClasses des classes
        foreach ($classes as $classe) {
         $sousClasses[] = $em->getRepository('AppBundle:SousClasse')->getSousClasses(1,$classe->getCodeClasse());
        }

      //  die(dump($sousClasses));


        if ($form->isSubmitted() && $form->isValid()) {
          $file = $request->files->get('fileInfo');
          if ($file !=null) {
            $fileName = $this->get('app.information_uploader')->upload($file);
            $fichier = new Fichier();
            $fichier->setNom($fileName)
                    ->setChemin($file->getPathname())
                    ->setTypeFichier($file->getClientMimeType())
                    ->setInformation($information)
                    ->setUpdatedAt(new \DateTime('now'));
            $em->persist($fichier);

          }

          $em->persist($information);
          $em->flush();

          return $this->redirectToRoute('api_info_show', array('id' => $information->getId()));
            //print_r($defaultImg[0]);
        }
    return $this->render('APIInfoBundle:information:new.html.twig', array(
            'information' => $information,
            'sousClasses' => $sousClasses,
            'classes' => $classes,
            'form' => $form->createView(),
        ));

    }

    /**
     * Finds and displays a Information entity.
     *
     */
    public function showAction(Information $information)
    {
        $deleteForm = $this->createDeleteForm($information);

        return $this->render('APIInfoBundle:information:show.html.twig', array(
            'information' => $information,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Information entity.
     *
     */
    public function editAction(Request $request, Information $information)
    {
        $deleteForm = $this->createDeleteForm($information);
        $editForm = $this->createForm('AppBundle\Form\InformationType', $information);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $information -> setUpdatedAt(new \DateTime('now'));
            $em->persist($information);
            $em->flush();

            return $this->redirectToRoute('api_info_edit', array('id' => $information->getId()));
        }

        return $this->render('APIInfoBundle:information:edit.html.twig', array(
            'information' => $information,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Information entity.
     *
     */
    public function deleteAction(Request $request, Information $information)
    {
        $form = $this->createDeleteForm($information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($information);
            $em->flush();
        }

        return $this->redirectToRoute('api_info_index');
    }

    /**
     * Creates a form to delete a Information entity.
     *
     * @param Information $information The Information entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Information $information)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('api_info_delete', array('id' => $information->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

                                      /*   M E S  F O N C T I O N S  */
    // retourner les infos d'un destinataire
    public function getInfoByDestinataireAction(Request $request)
        {
          $em = $this->getDoctrine()->getManager();

          $infos = $em->getRepository('AppBundle:Information')->findBy(array('destinataire' => $request->get('code'),'publie' => true),
                                                                       array('datePublication' => 'desc' ) );
            //die(dump($infos));
          return $infos;
        }

      // retourner les infos d'un établissement selon le type(facultatif) avec un max
      public function getInfosOfEtablissementAction(Request $request)
          {
            $em = $this->getDoctrine()->getManager();

            $infos = $em->getRepository('AppBundle:Information')->getInfo($request->get('etablissementId'),$request->get('type'),$request->get('max'));


            return $infos;
          }

}
