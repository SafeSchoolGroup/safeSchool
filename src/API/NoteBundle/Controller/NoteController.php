<?php

namespace API\NoteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Note;
use AppBundle\Form\NoteType;
use AppBundle\Entity\Apprenant;
use AppBundle\Entity\MoyennePeriodiqueApprenant;
use AppBundle\Utility;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Doctrine\Common\Util\Debug;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
// For annotations
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

// use Ivory\Serializer\Serializer;
// use Acme\Model\AcmeObject;
// use Ivory\Serializer\Format;
// use JMS\Serializer\SerializerBuilder;
// use JMS\Serializer\SerializationContext;
// use Symfony\Component\Form\FormBuilderInterface;
/**
 * Note controller.
 *
 */
class NoteController extends Controller
{
    /**
     * Lists all Note entities.
     *
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('AppBundle:Note')->findAll();

        return $this->render('note/index.html.twig', array(
            'notes' => $notes,
        ));
    }

    /**
     * Creates a new Note entity.
     *
     */
    public function newAction(Request $request)
    {

      $em = $this->getDoctrine()->getManager();

      /* recuperer l'apprenant, le parent, l'etablissement et l'annee scolaire */

      $anneeScolaire = '2017-2018';
      $libel = 'ig1a';
      $ets = $em->getRepository('AppBundle:Etablissement')->find(1);
      $sousClasse = $em->getRepository('AppBundle:SousClasse')->findByLibelleSousClasse($libel);
      $ecn_id = $sousClasse[0]->getEtablissementClasseNiveau()->getId();
      $ecn = $em->getRepository('AppBundle:EtablissementClasseNiveau')->findById($ecn_id);
      $niveau_id = $ecn[0]->getNiveauEtude()->getId();
      $niveauEtude = $em->getRepository('AppBundle:NiveauEtude')->findById($niveau_id);

      $ec = $em->getRepository('AppBundle:EtablissementClasse')
               ->findById($ecn[0]->getEtablissementClasse()->getId());

      $classe = $em->getRepository('AppBundle:Classe')
                   ->findById($ec[0]->getClasse()->getId());

      /* appel des fonctions pour recuperer les apprenants des sousClasses et les matieres d'une classe*/
      $apprenants_of_sous_classe = $em->getRepository('AppBundle:CursusApprenant')
                                      ->getApprenantAndSousClasse($ets,$anneeScolaire,$sousClasse[0],'');

      $matieres_of_classe = $em->getRepository('AppBundle:Matiere')
                               ->getMatiereOfClasse($ets,$ecn,$niveauEtude[0]);

        $note = new Note();
        $form = $this->createForm('AppBundle\Form\NoteType', $note);
        $form->handleRequest($request);
        //die(dump($request));


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $apprenant_choisi = $em->getRepository('AppBundle:Apprenant')->find($request->get('apprenant'));
            $note->setApprenant($apprenant_choisi);

            $matiere_choisi = $em->getRepository('AppBundle:Matiere')->find($request->get('matiere'));
            $note->setMatiere($matiere_choisi);

            $note->setTypeNote($request->get('type'));

            $em->persist($note);
            $em->flush();

            return $this->redirectToRoute('api_note_show', array('id' => $note->getId()));
        }

        return $this->render('APINoteBundle:note:new.html.twig', array(
            'note' => $note,
            'ets' => $ets,
            'matieres_of_classe' => $matieres_of_classe,
            'apprenants_of_sous_classe' => $apprenants_of_sous_classe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Note entity.
     *
     */
    public function showAction(Note $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('APINoteBundle:note:show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Note entity.
     *
     */
    public function editAction(Request $request, Note $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('AppBundle\Form\NoteType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();

            return $this->redirectToRoute('api_note_edit', array('id' => $note->getId()));
        }

        return $this->render('note/edit.html.twig', array(
            'note' => $note,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Note entity.
     *
     */
    public function deleteAction(Request $request, Note $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();
        }

        return $this->redirectToRoute('api_note_index');
    }

    /**
     * Creates a form to delete a Note entity.
     *
     * @param Note $note The Note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Note $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('api_note_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function getNotesOfApprenantAction(Request $request)
    {
      $notes = array();
      $apprenant_id = $request->get('id');
      $anneeScolaire = '2017-2018';
      $em = $this->getDoctrine()->getManager();

      $apprenant = $em->getRepository('AppBundle:Apprenant')->findById($apprenant_id);
      $ets_apprenant = $em->getRepository('AppBundle:EtablissementApprenant')
                ->findBy(array('apprenant'=>$apprenant[0]));
      $apprenantCursus = $em->getRepository('AppBundle:CursusApprenant')
                            ->findByEtablissementApprenant($ets_apprenant);
      $ets_id = $ets_apprenant[0]->getEtablissement()->getId();
      $ets = $em->getRepository('AppBundle:Etablissement')->findById($ets_id);
      //recuperer la sousClasse puis la classeNiveau de l'apprenant
      $sous_classe_of_apprenant = $em->getRepository('AppBundle:CursusApprenant')
                                      ->getApprenantAndSousClasse($ets[0],$anneeScolaire,null,$apprenant[0]);

      $classe_niveau = $sous_classe_of_apprenant[0]->getSousClasse()->getEtablissementClasseNiveau();

      // recuperer les matieres de la classeNiveau
      $matieres = $em->getRepository('AppBundle:Matiere')->findByEtablissementClasseNiveau($classe_niveau);
      // Enfin les notes de l'apprenants par matieres
      for ($i=0; $i <count($matieres) ; $i++) {
        $note = array();
        $note['matiere'] = $matieres[$i];
        $note['notes'] = $em->getRepository('AppBundle:Note')->getNotesOfApprenant($ets[0],$apprenant,$matieres[$i]);
        $notes[$i] = $note;

      }
//die(dump($notes,$ets[0]));
      $normalizer = new ObjectNormalizer();
      $normalizer->setIgnoredAttributes(array('notes','etablissementClasseNiveau',
                                              'etablissementProfMatieres',
                                               'apprenant','matiere',
                                               'votes','etablissementClasses',
                                                'etablissementProfs','etablissementSalles',
                                                'apprenantCursus','periodes'));
      $normalizers = array($normalizer);
      $serializer = new Serializer($normalizers, [new JsonEncoder()]);
    //  $jsonContent = $serializer->serialize($notes, 'json');
      $jsonContentNotes = json_decode($serializer->serialize($notes,'json'),true);
      $jsonContentEts = json_decode($serializer->serialize($ets[0],'json'),true);

      //die(dump($notes));
      return new JsonResponse(array('notes'=> $jsonContentNotes, 'ets'=> $jsonContentEts) );
    }

    public function getNotesForTuteurAction(Request $request)
    {
      $notes = array();
      $notes_for_tuteur = array();

      $anneeScolaire = '2017-2018';

      $em = $this->getDoctrine()->getManager();

      //$ets = $em->getRepository('AppBundle:Etablissement')->find(get('ets'));
      $apprenants_of_tuteur = $em->getRepository('AppBundle:Apprenant')
                                 ->findByTuteur($request->get('id'));

      for ($j=0; $j <count($apprenants_of_tuteur) ; $j++) {
        $ets_apprenant = $em->getRepository('AppBundle:EtablissementApprenant')
                  ->findBy(array('apprenant'=>$apprenants_of_tuteur[$j]));

        $ets_id = $ets_apprenant[0]->getEtablissement()->getId();
        $ets = $em->getRepository('AppBundle:Etablissement')->findById($ets_id);
        /* recuperer la classeNiveau de l'apprenant */
        $sous_classe_of_apprenant = $em->getRepository('AppBundle:CursusApprenant')
                                        ->getApprenantAndSousClasse($ets,$anneeScolaire,null,$apprenants_of_tuteur[$j]);

        $classe_niveau = $sous_classe_of_apprenant[0]->getSousClasse()->getEtablissementClasseNiveau();
        /* recuperer les matieres de la classeNiveau */
        $matieres = $em->getRepository('AppBundle:Matiere')->findByEtablissementClasseNiveau($classe_niveau);
        /* Enfin les notes de l'apprenants par matieres*/

        for ($i=0; $i <count($matieres) ; $i++) {
          $note = array();
          $note[0] = $matieres[$i];
          $note[1] = $em->getRepository('AppBundle:Note')->getNotesOfApprenant($ets[0],$matieres[$i],$apprenants_of_tuteur[$j]);
          $notes[$i] = $note;
        }
        $note_of_tuteur = array();
        $note_of_tuteur[0] = $apprenants_of_tuteur[$j];
        $note_of_tuteur[1] = $notes;
        $notes_for_tuteur[$j]= $note_of_tuteur;
      }
      die(dump($notes_for_tuteur));
      return new JsonResponse($notes_for_tuteur);
    }
    public function noteEtMoyenneAction(Request $request)
    {

        return $this->render('APINoteBundle:note:noteEtMoyenne.html.twig', array(
          'id_apprenant' => $request->get('id_apprenant'),
        ));

    }

    // recupere la moyenne par matiere d'un apprenant
    public function setApprenantMoyenneAction(Request $request)
    {
      // recuperation de l'ajax
      $id_apprenant = $request->get('id_apprenant');
      $id_matiere = $request->get('id_matiere');
      $moyenne = $request->get('moyenne');
      //die(dump($id_apprenant, $id_matiere, $moyenne));
      if ($moyenne == 'NaN') {
            $moyenne = 0;
        }
        //die(dump($id_matiere));
      // find les objets correspondant
      $em = $this->getDoctrine()->getManager();
      $apprenant = $em->getRepository('AppBundle:Apprenant')->findById($id_apprenant);
      $ets_apprenant = $em->getRepository('AppBundle:EtablissementApprenant')
                ->findBy(array('apprenant'=>$apprenant[0]));
      $apprenantCursus = $em->getRepository('AppBundle:CursusApprenant')
                            ->findByEtablissementApprenant($ets_apprenant);

      $matiere = $em->getRepository('AppBundle:Matiere')->findById($id_matiere);
      $note = $em->getRepository('AppBundle:Note')->findBy(array('apprenantCursus'=>$apprenantCursus[0],
                                                                  'matiere'=>$matiere[0],
                                                                  'typeNote'=>'moyenne',
                                                              //  'anneescolaire'
                                                              ));
      // mise a jour de la base(enregistrement des m0yennes)

      if (!empty($note)) {
        $note[0]->setNote($moyenne);
        $em->persist($note[0]);
      }
    else {
      $note = new Note();
      $note->setapprenantCursus($apprenantCursus[0]);
      $note->setMatiere($matiere[0]);
      $note->setTypeNote('moyenne');
      $note->setNote($moyenne);
      $em->persist($note);
      $em->flush();
    }

      return new JsonResponse(array('success' => 'Success'));
    }

  // recuperer les moyennes par matiere de l'apprenant de la BD
  public function getApprenantMoyenneAction(Request $request){
    $id_apprenant = $request->get('id_apprenant');

    $em = $this->getDoctrine()->getManager();
    $apprenant = $em->getRepository('AppBundle:Apprenant')->findById($id_apprenant);
    $ets_apprenant = $em->getRepository('AppBundle:EtablissementApprenant')
              ->findByApprenant($apprenant[0]);
    $ets = $ets_apprenant[0]->getEtablissement();
    $moyennes = $em->getRepository('AppBundle:Note')->getNotesOfApprenant($ets,$apprenant[0]);

die(dump($moyennes));
    $totalNote = 0;
    $totalCredit = 0;
    foreach ($moyennes as $moy) {
      $note = $moy->getNote();
      $credit = $moy->getMatiere()->getCredit();
      $m = $note * $credit;
      $totalCredit += $credit;
      $totalNote += $m;
    }
    $moyenne = round(($totalNote / $totalCredit),2);
    // Enrégistrement de la moyenne de l'apprennant dans MoyennePeriodiqueApprenant
          // recuperer la période d'id 1 en attendant de régler le problème avec les périodes
          $periode = $em->getRepository('AppBundle:Periode')->findById(3);
          // recuperer le CursusApprenant
          $cursus = $moyennes[0]->getApprenantCursus();
    // verifions si la moyenne existe dans la table MoyennePeriodiqueApprenant
    $moyennePeriodiqueApprenant = $em->getRepository('AppBundle:MoyennePeriodiqueApprenant')
                                     ->findBy(array('apprenantCursus'=>$cursus,
                                                    'periode' =>$periode[0]));
          // mise a jour de la base(enregistrement des moyennes periodique des apprennants)

          if (!empty($moyennePeriodiqueApprenant)) {
            $moyennePeriodiqueApprenant[0]->setMoyenne($moyenne);
            $moyennePeriodiqueApprenant[0]->setUpdatedAt(new \DateTime('now'));
            $em->persist($moyennePeriodiqueApprenant[0]);

          }
        else {
          $moyennePeriodiqueApprenant = new MoyennePeriodiqueApprenant();
          $moyennePeriodiqueApprenant->setApprenantCursus($cursus);
          $moyennePeriodiqueApprenant->setPeriode($periode[0]);
          $moyennePeriodiqueApprenant->setCreatedAt(new \DateTime('now'));
          $moyennePeriodiqueApprenant->setUpdatedAt(new \DateTime('now'));
          $moyennePeriodiqueApprenant->setMoyenne($moyenne);
          $em->persist($moyennePeriodiqueApprenant);
        }
          $em->flush();

          die(dump($moyennePeriodiqueApprenant));
  }

  // recuperer les moyennes par periode des apprenants d'une sousClasse
  // puis calcule et renvoie les performence de la sous classe
  public function getMoyenneOfSousClasseAction(Request $request){
    $id_cursus = $request->get('id_cursus');
    $id_periode = $request->get('id_periode');

    $em = $this->getDoctrine()->getManager();

    $cursus = $em->getRepository('AppBundle:CursusApprenant')->findById($id_cursus);
    $sousClasse = $cursus[0]->getSousClasse();

    $periode = $em->getRepository('AppBundle:Periode')->findById($id_periode);

    $moyennesSousClasse = $em->getRepository('AppBundle:MoyennePeriodiqueApprenant')
                             ->getMoyenneOfSousClasse($sousClasse,$periode[0]);

        die(dump($moyennesSousClasse));
  }
}
