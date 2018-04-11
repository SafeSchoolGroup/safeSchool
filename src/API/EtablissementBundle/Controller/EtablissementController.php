<?php

namespace API\EtablissementBundle\Controller;

use AppBundle\Entity\Apprenant;
use AppBundle\Entity\Tuteur;
use AppBundle\Entity\Avis;
use AppBundle\Entity\Etablissement;
use AppBundle\Entity\Filiere;
use AppBundle\Utility;
use SafeSchool\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Etablissement controller.
 *
 */
class EtablissementController extends Controller
{
    /**
     * Lists all Etablissement entities.
     *
     */
    public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();

         /*$apprenant = new Apprenant();
         $tuteur = new Tuteur();
         $apprenant->setNationalite('bebhhfg')
                    ->setAdresseRue('gfgf')
                    ->setAdresseVille('igiufg')
             ->setNom('second')
             ->setPrenom('hdgdsij')
             ->setSexe('M')
             ->setTelephone('98674533')
                    ->setEmail('dhgdhg@fg.com')
                    ->setDateNaissance(new \DateTime('now'))
                    ->setLieuNaissance('hgdkg')
                   ;

         $user = new User();
         $user->setEmail('fgr@ggf.com')
             ->setUserType('apprenant')
             ->setUsername('fdgdg')
             ->setPassword('azertyu')
             ->setEnabled(true);
         $em->persist($user);
         $em->flush();

         $apprenant->setUser($user);
         $user->setApprenant($apprenant);
         $em->persist($apprenant);
         $em->flush();*/
         //$app = $em->getRepository('AppBundle:Apprenant')->find(2);
         //die(dump($app->getUser()));


         $etablissements = $em->getRepository('AppBundle:Etablissement')->findAll();
         return $this->render('APIEtablissementBundle:etablissement:index.html.twig', array(
             'etablissements' => $etablissements,
         ));
     }

    /**
     * Creates a new Etablissement entity.
     *
     */
    public function newAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $etablissement = new Etablissement();
      $form = $this->createForm('AppBundle\Form\EtablissementType', $etablissement);
      $form->handleRequest($request);

      if ($request->isXmlHttpRequest()) {
        if ($form->isSubmitted() && $form->isValid()) {
            $logo = $etablissement->getLogoEtablissement();
            if (!empty($logo) && !empty($img_couverture)) {
              $logoName = $this->get('app.etablissement_uploader')->upload($logo);
              $etablissement->setLogoEtablissement($logoName);

              $img_couverture = $etablissement->getPhotoCouvertureEtablissement();
              $img_couvertureName = $this->get('app.etablissement_uploader')->upload($img_couverture);
              $etablissement->setPhotoCouvertureEtablissement($img_couvertureName);
            }

            $etablissement->setHistorique('dfgsfdg');
            $em->persist($etablissement);
            $em->flush();

            //school user account
            $user = new User();
            $password = bin2hex(openssl_random_pseudo_bytes(12));
            $user->setEmail($etablissement->getEmail())
                ->setUserType('ets')
                ->setUsername(bin2hex(openssl_random_pseudo_bytes(6)))
                ->setPassword(password_hash($password,PASSWORD_DEFAULT))
                ->setEnabled(true)
                ->setEtablissementId($etablissement->getId());
            $em->persist($user);
            $em->flush();

            // sending mail
            $name = $etablissement->getNom();
            $subject = "Enregistrement sur la plateforme SafeSchool";
            $to = $etablissement->getEmail();
            $body = "Bonjour,".
            "\n Nous sommes ravis de compter ".
            $name." parmi les abonnés de la plateforme SafeSchool.".
            "\n Afin de poursuivre l'enregistrement, veuillez vous connecter en
            cliquant sur ce lien : http://localhost:8000/login avec les informations ci-après
            sur le lien ci-dessous: \n ".
            "Nom d'utilisateur : ". $user->getUsername(). "\n".
            "Mot de passe : ". $password;

            $this->mailSender($subject,$to,$body);

            return new JsonResponse(array(
              'message' => 'Success',
              'userpas' => $password,
              'userN' => $user->getUsername(),
              'data' => $this->getErrorMessages($form),
              'etab' => $user->getEtablissementId())
              , 200);
            //return $this->redirectToRoute('api_etablissement_show', array('id' => $etablissement->getId()));
        }
        else if($form->isSubmitted() && !$form->isValid()){
           return new JsonResponse(array(
             'message' => 'Error',
              'data' => $this->getErrorMessages($form))
             , 404);
        }
      }
        return $this->render('APIEtablissementBundle:etablissement:new.html.twig', array(
            'etablissement' => $etablissement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etablissement entity.
     *
     */
    public function showAction(Etablissement $etablissement)
    {
        $deleteForm = $this->createDeleteForm($etablissement);

        return $this->render('APIEtablissementBundle:etablissement:show.html.twig', array(
            'etablissement' => $etablissement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Etablissement entity.
     *
     */
    public function editAction(Request $request, Etablissement $etablissement)
    {
        $deleteForm = $this->createDeleteForm($etablissement);
        $editForm = $this->createForm('AppBundle\Form\EtablissementType', $etablissement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etablissement);
            $em->flush();

            return $this->redirectToRoute('api_etablissement_edit', array('id' => $etablissement->getId()));
        }

        return $this->render('APIEtablissementBundle:etablissement:edit.html.twig', array(
            'etablissement' => $etablissement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Etablissement entity.
     *
     */
    public function deleteAction(Request $request, Etablissement $etablissement)
    {
        $form = $this->createDeleteForm($etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etablissement);
            $em->flush();
        }

        return $this->redirectToRoute('api_etablissement_index');
    }

    /**
     * Creates a form to delete a Etablissement entity.
     *
     * @param Etablissement $etablissement The Etablissement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etablissement $etablissement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('api_etablissement_delete', array('id' => $etablissement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


//
//     public function ajaxActuAction(Request $request)
//     {
//       $id = $request->get('id');
//       $em = $this->getDoctrine()->getManager();
//       $actualite = $em->getRepository('AppBundle:Information')->getActuById($id);
//
//       return new JsonResponse($actualite);
//
//     }
//
//     public function ajaxLoadLastActuBgAction()
//     {
//       $em = $this->getDoctrine()->getManager();
//       $last_bg = $em->getRepository('AppBundle:Information')->getLatestActus();
//
//       return new JsonResponse($last_bg);
//
//     }
//
//     public function listeAnnoncesComsAction(Request $request){
//       $em = $this->getDoctrine()->getManager();
//       $etablissements = $em->getRepository('AppBundle:Etablissement')->find(5);
//       $all_annonces_coms = $em->getRepository('AppBundle:Information')->getAnnoncesEtCommuniques();
//
//       return $this->render('APIEtablissementBundle:etablissement:annonces_coms.html.twig', array(
//             'all_annonces_coms' => $all_annonces_coms,
//             'etablissements' => $etablissements,
//
//       ));
//
//     }
//
//
// // juste renvoyer la vue pour la liste des etablissemnts
//     public function listeEtablissementsAction()
//     {
//       $em = $this->getDoctrine()->getManager();
//       $etablissements = $em->getRepository('AppBundle:Etablissement')->find(1);
//       $all_annonces_coms = $em->getRepository('AppBundle:Information')->getAnnoncesEtCommuniques();
//
//       return $this->render('APIEtablissementBundle:etablissement:liste.html.twig', array(
//             'all_annonces_coms' => $all_annonces_coms,
//             'etablissements' => $etablissements,
//
//       ));
//
//     }
//
//     // fonction pour afficher la liste des etablissements
//     public function ajaxListeEtablissementsAction(Request $request){
//       $niveau = $request->get('niveau');
//       $statut = $request->get('statut');
//       $categorie = $request->get('categorie');
//
//       $em = $this->getDoctrine()->getManager();
//       $listeEtablissements = $em->getRepository('AppBundle:Etablissement')->getEtablissementsByCaracteristiques($niveau, $statut, $categorie);
//
//       return new JsonResponse($listeEtablissements);
//
//     }
//
//     public function contactAction(Request $request){
//       $em = $this->getDoctrine()->getManager();
//       $etablissements = $em->getRepository('AppBundle:Etablissement')->find(1);
//
//       $avis = new Avis();
//       $form = $this->createForm('AppBundle\Form\AvisType', $avis);
//       $form->handleRequest($request);
//
//       if ($form->isSubmitted() && $form->isValid()) {
//           $em = $this->getDoctrine()->getManager();
//           $avis->setCreatedAt(new \DateTime('now'));
//           $em->persist($avis);
//           $em->flush();
//
//           return $this->redirectToRoute('etablissement_index');
//       }
//       return $this->render('APIEtablissementBundle:etablissement:contact.html.twig', array(
//             'etablissements' => $etablissements,
//             'avis' => $avis,
//             'form' => $form->createView(),
//
//       ));
//     }
    public function ajaxFiliereAction(Request $request)
    {
      $id = $request->get('id');
      $em = $this->getDoctrine()->getManager();
      $filiere = $em->getRepository('AppBundle:Filiere')->findFiliereById($id);
      $matieres = $em->getRepository('AppBundle:Matiere')->findMatiereByFiliere($id, 1);

      $matieres1 = $em->getRepository('AppBundle:Matiere')->findMatiereByFiliere($id, 1);
      $matieres2 = $em->getRepository('AppBundle:Matiere')->findMatiereByFiliere($id, 2);
      $matieres3 = $em->getRepository('AppBundle:Matiere')->findMatiereByFiliere($id, 3);


      return new JsonResponse(array('filiere' => $filiere,
                                    'matieres1' => $matieres1,
                                    'matieres2' => $matieres2,
                                    'matieres3' => $matieres3,
                                    ));
  }

  public function listeAllActusAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $etablissements = $em->getRepository('AppBundle:Etablissement')->find(1);
    $actus = $em->getRepository('AppBundle:Information')->listeAllActus();

    return $this->render('APIEtablissementBundle:etablissement:listeAllActus.html.twig', array(
          'etablissements' => $etablissements,
          'actus' => $actus,

    ));

  }

    public function ajaxActuAction(Request $request)
    {
      $id = $request->get('id');
      $em = $this->getDoctrine()->getManager();
      $actualite = $em->getRepository('AppBundle:Information')->getActuById($id);

      return new JsonResponse($actualite);

    }

    public function ajaxLoadLastActuBgAction()
    {
      $em = $this->getDoctrine()->getManager();
      $last_bg = $em->getRepository('AppBundle:Information')->getLatestActus();

      return new JsonResponse($last_bg);

    }

    public function listeAnnoncesComsAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $etablissements = $em->getRepository('AppBundle:Etablissement')->find(5);
      $all_annonces_coms = $em->getRepository('AppBundle:Information')->getAnnoncesEtCommuniques();

      return $this->render('APIEtablissementBundle:etablissement:annonces_coms.html.twig', array(
            'all_annonces_coms' => $all_annonces_coms,
            'etablissements' => $etablissements,

      ));

    }


// juste renvoyer la vue pour la liste des etablissemnts
    public function listOfEtablissementsAction()
    {
      return $this->render('APIEtablissementBundle:etablissement:etablissementList.html.twig');
    }

    // fonction pour afficher la liste des etablissements
    public function listeEtablissementsByCriteriaAction(Request $request){
      $niveau = $request->get('niveau');
      $statut = $request->get('statut');
      $categorie = $request->get('categorie');

      $em = $this->getDoctrine()->getManager();
      $listeEtablissements = $em->getRepository('AppBundle:Etablissement')->getEtablissementsByCaracteristiques($niveau, $statut);

      return $this->render('APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig',array(
                  'etablissements' => $listeEtablissements,

            ));

    }

    // Generate an array contains a key -> value with the errors where the key is the name of the form field
    protected function getErrorMessages(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

    //mailer
    public function mailSender($subject,$to,$body)
    {
      $message = \Swift_Message::newInstance()
        ->setSubject($subject)
        ->setFrom('safeschool.team@gmail.com')
        ->setTo($to)
        ->setBody($body)
        ;
        $this->get('mailer')->send($message);
    }

    public function schoolHomeAction()
    {
        return $this->render('APIEtablissementBundle:home:index.html.twig');
    }

    /**
     * Save school info entity.
     *
     */
    public function ajaxSchoolInfoAction(Request $request)
    {
      $etablissementId = $this->getUser()->getEtablissementId();
      $em = $this->getDoctrine()->getManager();
      $etablissement = $em->getRepository('AppBundle:Etablissement')->find($etablissementId);

      $form->handleRequest($request);
      if ($request->isXmlHttpRequest()) {
        if ($form->isSubmitted() && $form->isValid()) {

            $logo = $etablissement->getLogoEtablissement();
            if (!empty($logo) && !empty($img_couverture)) {
              $logoName = $this->get('app.etablissement_uploader')->upload($logo);
              $etablissement->setLogoEtablissement($logoName);

              $img_couverture = $etablissement->getPhotoCouvertureEtablissement();
              $img_couvertureName = $this->get('app.etablissement_uploader')->upload($img_couverture);
              $etablissement->setPhotoCouvertureEtablissement($img_couvertureName);
            }

            $etablissement->setHistorique($request->get('historique'));
            $em->flush();

            return new JsonResponse(array(
              'message' => 'Success',
              'userN' => $this->getUser()->getUsername(),
              'data' => $this->getErrorMessages($form),
              'etab' => $this->getUser()->getEtablissementId())
              , 200);

        }
        else {
            return new JsonResponse(array(
              'message' => 'Failure',
              'userN' => $this->getUser()->getUsername(),
              'data' => $this->getErrorMessages($form),
              'etab' => $this->getUser()->getEtablissementId())
              , 404);
        }
      }
    }

}
