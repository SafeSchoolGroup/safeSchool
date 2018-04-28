<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\ProgrammeCours;
use AppBundle\Form\ProgrammeCoursType;

/**
 * ProgrammeCours controller.
 *
 */
class ProgrammeCoursController extends Controller
{
    /**
     * Lists all ProgrammeCours entities.
     *
     */
    public function indexAction(Request $request)
    {
        $idEtablissement = $request->get('id_etablissement');
        $em = $this->getDoctrine()->getManager();


        $programmeCours = $em->getRepository('AppBundle:ProgrammeCours')->findAll();

        return $this->render('programmecours/index.html.twig', array(
            'programmeCours' => $programmeCours,
            'idEtablissement' => $idEtablissement
        ));
    }

    /**
     * Creates a new ProgrammeCours entity.
     *
     */
    public function newAction(Request $request)
    {
        $programmeCour = new ProgrammeCours();
        $idEtablissement = $request->get('id_etablissement');
        //die(dump($request));

        $form = $this->createForm('AppBundle\Form\ProgrammeCoursType', $programmeCour);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $programmeControlSalle = $programmeControlProf = $programmeControlClasse = array();
        //die(dump($request));

        //$matieres = $this->getAllMatieresFromEnseigner();
        //$prof = $this->getAllProfFromEnseigner();
        $etablissementProfId = $em->getRepository('AppBundle:EtablissementProf')->findByEtablissement($idEtablissement);
        $objectEnseignerS = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProfId);

        $matieres = array();
        foreach ($objectEnseignerS as $objectEnseigner) {
            $matieres[] = array('matiere_id' => $objectEnseigner->getEtablissementProf()->getMatiere()->getId() ,
                             'libelle' => $objectEnseigner->getEtablissementProf()->getMatiere()->getLibelleMatiere(),

                                  );

        }
        $matieres = array_map("unserialize",array_unique(array_map("serialize",$matieres)));

        $prof = array();
        foreach ($objectEnseignerS as $objectEnseigner) {
            $prof[] = array('prof_id' => $objectEnseigner->getEtablissementProf()->getProf()->getId() ,
                             'nom' => $objectEnseigner->getEtablissementProf()->getProf()->getNom(),
                                  );

        }
        $prof = array_map("unserialize",array_unique(array_map("serialize",$prof)));

        //die(dump($prof));
        //die(dump($objectEnseignerS));
        //$professeur = $request->get('programme_cours_secondaire_profEnseigner_');
        //$idMatiere = $request->get('programme_cours_secondaire_matiereEnseigner_');
        //$matiere = $em->getRepository('AppBundle:MatiereSecondaire')->findById($idMatiere);


        if ($request->isXmlHttpRequest() && $request->getMethod() == 'POST') {
            //die(dump($request));
            $em = $this->getDoctrine()->getManager();
            $em->persist($programmeCour);
            $em->flush();

            return $this->redirectToRoute('programmecours_show', array('id' => $programmeCour->getId(),
                                                                        'id_etablissement' => $idEtablissement));
        }

        return $this->render('programmecours/new.html.twig', array(
            'programmeCour' => $programmeCour,
            'idEtablissement' => $idEtablissement,
            'matieres' => $matieres,
            'profes' => $prof,
            'form' => $form->createView(),
        ));
    }


    public function getProfAndMatiereBySousClasseAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $idSousClasse =  $request->get('id_sous_classe');
        $idEtablissement = $request->get('id_etablissement');
        $matiereId =  $request->get('id_matiere');
        $profId =  $request->get('id_prof');

        $professeur = null;
        $matiere = null;
        $prof_par_matiere_et_sousclasse = null;
        $matieres_par_prof_et_sousclasse = null;
        $sousclasse_by_matiere_and_prof = null;
        $sousclasse_by_matiere = null;
        $sousclasse_by_prof= null;

        if($idSousClasse !== 'null'){
            $professeur = $this->getProfBySousClasse($idSousClasse,$idEtablissement);
            $matiere =  $this->getMatiereBySousClasse($idSousClasse,$idEtablissement);
            if($matiereId !== 'null' && $profId !== 'null'){
                $prof_par_matiere_et_sousclasse = $this->getProfBySousClasseAndMatiere($idEtablissement,$matiereId,$idSousClasse);
                $matieres_par_prof_et_sousclasse = $this->getMatiereBySousClasseAndProf($idEtablissement,$idSousClasse,$profId);
            }else if($matiereId !== 'null' && $profId == 'null') {
                $prof_par_matiere_et_sousclasse = $this->getProfBySousClasseAndMatiere($idEtablissement,$matiereId,$idSousClasse);
            } else if($profId !== 'null' && $matiereId == 'null') {
                $matieres_par_prof_et_sousclasse = $this->getMatiereBySousClasseAndProf($idEtablissement,$profId,$idSousClasse);
            }
        }else {
            if($matiereId !== 'null' && $profId !== 'null'){
                $prof_par_matiere_et_sousclasse = $this->getProfBySousClasseAndMatiere($idEtablissement,$matiereId,$idSousClasse);
                $matieres_par_prof_et_sousclasse = $this->getMatiereBySousClasseAndProf($idEtablissement,$profId,$idSousClasse);
                $sousclasse_by_matiere_and_prof =  $this->getSousClasseByProfAndMatiere($idEtablissement,$matiereId,$profId);
            }else if($matiereId !== 'null' && $profId =='null') {
                $prof_par_matiere_et_sousclasse = $this->getProfBySousClasseAndMatiere($idEtablissement,$matiereId,$idSousClasse);
                $sousclasse_by_matiere = $this->getSousClasseByProfAndMatiere($idEtablissement,$matiereId,$profId);
            }else {
                $matieres_par_prof_et_sousclasse = $this->getMatiereBySousClasseAndProf($idEtablissement,$profId,$idSousClasse);
                $sousclasse_by_prof = $this->getSousClasseByProfAndMatiere($idEtablissement,$matiereId,$profId);
            }
        }
        return new JsonResponse (array(
            'profs' => $professeur,
            'matieres' => $matiere,
            'profMatiereSousclasse' => $prof_par_matiere_et_sousclasse,
            'matieresProfSousclasse' => $matieres_par_prof_et_sousclasse,
            'sousclasse_by_matiere_and_prof' => $sousclasse_by_matiere_and_prof,
            'sousclasse_by_matiere' => $sousclasse_by_matiere,
            'sousclasse_by_prof' => $sousclasse_by_prof
        ));
    }


    public function getProfBySousClasse($idSousClasse,$idEtablissement)
   {
     $em = $this->getDoctrine()->getManager();
     $etablissementProfId = $em->getRepository('AppBundle:EtablissementProf')->findByEtablissement($idEtablissement);


     $profMatieres = array();
     $profMatieres = $em->getRepository('AppBundle:Enseigner')->findBy(array('sousClasse'=>$idSousClasse,
                                                                                'etablissementProf'=>$etablissementProfId));
     if(!empty($profMatieres)){
        foreach ($profMatieres as $profMatiere ) {
            $prof_matieres[] = array('id' => $profMatiere->getEtablissementProf()->getProf()->getId() ,
                                      'nom' => $profMatiere->getEtablissementProf()->getProf()->getNom()
                                  );
        }

        $prof_matieres = array_map("unserialize",array_unique(array_map("serialize",$prof_matieres)));
        $profM = array();
        foreach ($prof_matieres as $pm) {
            $profM[] = $pm;
        }
        $profM = array_map("unserialize",array_unique(array_map("serialize",$profM)));

     }
     else {
        $id = false;
    }

     return $profM;
   }


   public function getMatiereBySousClasse($idSousClasse,$idEtablissement)
   {
    $em = $this->getDoctrine()->getManager();
    $etablissementProfId = $em->getRepository('AppBundle:EtablissementProf')->findByEtablissement($idEtablissement);


    $matieres = array();
    $matieres = $em->getRepository('AppBundle:Enseigner')->findBy(array('sousClasse'=>$idSousClasse,
                                                                               'etablissementProf'=>$etablissementProfId));
    if(!empty($matieres)){
       foreach ($matieres as $matiere) {
           $sousClasse_matieres[] = array('id' => $matiere->getEtablissementProf()->getMatiere()->getId() ,
                                     'libelle' => $matiere->getEtablissementProf()->getMatiere()->getLibelleMatiere()
                                 );
       }

       $sousClasse_matieres = array_map("unserialize",array_unique(array_map("serialize",$sousClasse_matieres)));
       $matiereUnique = array();
       foreach ($sousClasse_matieres as $matiereDouble) {
           $matiereUnique[] = $matiereDouble;
       }
       $matiereUnique = array_map("unserialize",array_unique(array_map("serialize",$matiereUnique)));

    }
    else {
       $id = false;
   }

    return $matiereUnique;
   }

  /* public function getMatiereByProfAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $profId =  $request->get('id');
    $idEtablissement = $request->get('id_etablissement');
    $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                                'etablissement'=>$idEtablissement,
                                                                'prof' => $profId
                                                            ));
    $prof_enseigner = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProf);
    //$profMatieres = $em->getRepository('AppBundle:Enseigner')->getMatiereByProf($profId);
    if(!empty($prof_enseigner)){
        $prof_matieres = array();
       foreach ($prof_enseigner as $profMatiere ) {
           $prof_matieres[] = array('id' => $profMatiere->getEtablissementProf()->getMatiere()->getId() ,
                                     'libelle' => $profMatiere->getEtablissementProf()->getMatiere()->getLibelleMatiere()
                                 );
       }
       $prof_matieres = array_map("unserialize",array_unique(array_map("serialize",$prof_matieres)));

    }
    else {
       $id = false;
    }

    return new JsonResponse($prof_matieres);


  }
/*


 /* public function getProfByMatiereAction(Request $request)
 {
   $em = $this->getDoctrine()->getManager();

   $matiereId =  $request->get('id_matiere');
   $idEtablissement = $request->get('id_etablissement');
   $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                               'etablissement'=>$idEtablissement,
                                                               'matiere' => $matiereId
                                                           ));

   $enseigner = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProf);

   //$profMatieres = $em->getRepository('AppBundle:Enseigner')->getMatiereByProf($profId);
   if(!empty($enseigner)){
       $matieres_prof = array();
      foreach ($enseigner as $matiereProf ) {
          $matieres_prof[] = array('id' => $matiereProf->getEtablissementProf()->getProf()->getId() ,
                                    'nom' => $matiereProf->getEtablissementProf()->getProf()->getNom()
                                );
      }

      $matieres_prof = array_map("unserialize",array_unique(array_map("serialize",$matieres_prof)));

   }
   else {
      $id = false;
   }

   return new JsonResponse($matieres_prof);


 }
*/



  public function getMatiereBySousClasseAndProf($idEtablissement,$profId,$idSousClasse)
 {
   $em = $this->getDoctrine()->getManager();
   $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                               'etablissement'=>$idEtablissement,
                                                               'prof' => $profId
                                                           ));


     $content = array('etablissementProf'=>$etablissementProf,
      'sousClasse' => $idSousClasse
     );

    if($idSousClasse == 'null'){
    $content = array('etablissementProf'=>$etablissementProf);
}
   $prof_enseigner = $em->getRepository('AppBundle:Enseigner')->findBy($content
                                                           );
   $prof_matieres = array();
   if(!empty($prof_enseigner)){
      foreach ($prof_enseigner as $profMatiere) {
          $prof_matieres[] = array('id' => $profMatiere->getEtablissementProf()->getMatiere()->getId() ,
                                    'libelle' => $profMatiere->getEtablissementProf()->getMatiere()->getLibelleMatiere()
                                );
      }
      $prof_matieres = array_map("unserialize",array_unique(array_map("serialize",$prof_matieres)));

   }
   else {
      $id = false;
   }

   return $prof_matieres;
 }


 public function getProfBySousClasseAndMatiere($idEtablissement,$matiereId,$idSousClasse)
{

  $em = $this->getDoctrine()->getManager();
  $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                              'etablissement'=>$idEtablissement,
                                                              'matiere' => $matiereId
                                                          ));
$content = array('etablissementProf'=>$etablissementProf,
                'sousClasse' => $idSousClasse
            );

//die(dump($content));
if($idSousClasse == 'null'){
    $content = array('etablissementProf'=>$etablissementProf);
}

  $prof_enseigner = $em->getRepository('AppBundle:Enseigner')->findBy($content);

  if(!empty($prof_enseigner)){
     $prof_matieres = array();
     foreach ($prof_enseigner as $profMatiere) {
         $prof_matieres[] = array('id' => $profMatiere->getEtablissementProf()->getProf()->getId() ,
                                   'nom' => $profMatiere->getEtablissementProf()->getProf()->getNom()
                               );
     }
     $prof_matieres = array_map("unserialize",array_unique(array_map("serialize",$prof_matieres)));

  }
  else {
     $id = false;
  }

  return $prof_matieres;
}


public function getSousClasseByProfAndMatiere($idEtablissement,$matiereId,$profId)
{
    //die(dump($matiereId));
    $em = $this->getDoctrine()->getManager();
    //$matiereId = $matiereId || 'null';
    //die(dump($matiereId));
    $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
        'etablissement'=>$idEtablissement,
        'matiere' => $matiereId,
        'prof' => $profId
    ));
    //die(dump($etablissementProf));

    //$content = array('etablissementProf' => $etablissementProf);
    //die(dump($content));
    if (strcmp($matiereId,'null') != 0) {
        $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
            'etablissement'=>$idEtablissement,
            'matiere' => $matiereId,
            //'prof' => $profId
        ));
        //$content = array($etablissementProf);
        // die(dump($etablissementProf));
    }else if(strcmp($matiereId,'null') == 0){
        $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
            'etablissement'=>$idEtablissement,
            'prof' => $profId
        ));
        //die(dump("fgfg"));
        //$content = array($etablissementProf);
        //die(dump($content));
        //die(dump($etablissementProf));
    }


    // if (strcasecmp($profId,'null') != 0) {
    //     ;
    // }

    $enseigner = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProf);

    //die(dump($enseigner));

    //die(dump($prof_enseigner));

    //$profMatieres = $em->getRepository('AppBundle:Enseigner')->getMatiereByProf($profId);

    if(!empty($enseigner)){
        $enseigner_sousclasses = array();
        foreach ($enseigner as $element) {
            $enseigner_sousclasses[] = array(
                'id' => $element->getSousClasse()->getId() ,
                'libelle' => $element->getSousClasse()->getLibelleSousClasse()
            );
        }
        $enseigner_sousclasses = array_map("unserialize",array_unique(array_map("serialize",$enseigner_sousclasses)));
    }
    else {
        $id = false;
    }

    return $enseigner_sousclasses;
}


 /* public function getSousClasseByProfAction(Request $request)
  {
   $em = $this->getDoctrine()->getManager();

   $profId =  $request->get('id');
   $idEtablissement = $request->get('id_etablissement');
   $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                               'etablissement'=>$idEtablissement,
                                                               'prof' => $profId
                                                           ));
                                                          // die(dump($etablissementProf));
   $prof_sous_classes = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProf);

   //$profMatieres = $em->getRepository('AppBundle:Enseigner')->getMatiereByProf($profId);
   if(!empty($prof_sous_classes)){
       $prof_classe = array();
      foreach ($prof_sous_classes as $prof_sous_classe ) {
          $prof_classe[] = array('id' => $prof_sous_classe->getSousClasse()->getId() ,
                                    'libelle' => $prof_sous_classe->getSousClasse()->getLibelleSousClasse()
                                );
      }
      $prof_classe = array_map("unserialize",array_unique(array_map("serialize",$prof_classe)));

   }
   else {
      $id = false;
   }

   return new JsonResponse($prof_classe);


 }


 public function getSousClasseByMatiereAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();

  $matiereId =  $request->get('id');
  $idEtablissement = $request->get('id_etablissement');
  $etablissementProf = $em->getRepository('AppBundle:EtablissementProf')->findBy(array(
                                                              'etablissement'=>$idEtablissement,
                                                              'matiere' => $matiereId
                                                          ));
  $matiere_sous_classes = $em->getRepository('AppBundle:Enseigner')->findByEtablissementProf($etablissementProf);

  //$profMatieres = $em->getRepository('AppBundle:Enseigner')->getMatiereByProf($profId);
  if(!empty($matiere_sous_classes)){
      $matiere_classe = array();
     foreach ($matiere_sous_classes as $matiere_sous_classe ) {
         $matiere_classe[] = array('id' => $matiere_sous_classe->getSousClasse()->getId() ,
                                   'libelle' => $matiere_sous_classe->getSousClasse()->getLibelleSousClasse()
                               );
     }
     $matiere_classe = array_map("unserialize",array_unique(array_map("serialize",$matiere_classe)));

  }
  else {
     $id = false;
  }

  return new JsonResponse($matiere_classe);


}
*/
    /**
     * Finds and displays a ProgrammeCours entity.
     *
     */
    public function showAction(ProgrammeCours $programmeCour, Request $request)
    {
        $idEtablissement = $request->get('id_etablissement');
        $deleteForm = $this->createDeleteForm($programmeCour,$idEtablissement);

        return $this->render('programmecours/show.html.twig', array(
            'programmeCour' => $programmeCour,
            'id_etablissement' => $idEtablissement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProgrammeCours entity.
     *
     */
    public function editAction(Request $request, ProgrammeCours $programmeCour)
    {
        $deleteForm = $this->createDeleteForm($programmeCour);
        $editForm = $this->createForm('AppBundle\Form\ProgrammeCoursType', $programmeCour);
        $idEtablissement = $request->get('id_etablissement');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($programmeCour);
            $em->flush();

            return $this->redirectToRoute('programmecours_edit', array('id' => $programmeCour->getId(),
                                                                        'id_etablissement' => $idEtablissement));
        }

        return $this->render('programmecours/edit.html.twig', array(
            'programmeCour' => $programmeCour,
            'idEtablissement' => $idEtablissement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ProgrammeCours entity.
     *
     */
    public function deleteAction(Request $request, ProgrammeCours $programmeCour)
    {
        $idEtablissement = $request->get('id_etablissement');
        $form = $this->createDeleteForm($programmeCour,$idEtablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($programmeCour);
            $em->flush();
        }

        return $this->redirectToRoute('programmecours_index');
    }

    /**
     * Creates a form to delete a ProgrammeCours entity.
     *
     * @param ProgrammeCours $programmeCour The ProgrammeCours entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProgrammeCours $programmeCour,$idEtablissement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programmecours_delete', array('id' => $programmeCour->getId(),
                                                                            'id_etablissement' => $idEtablissement)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
