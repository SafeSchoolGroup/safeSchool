<?php

namespace API\InscriptionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use AppBundle\Form\Type\TelType;
use AppBundle\Validator\IsTelephone;
use AppBundle\Validator\IsLetter;
use AppBundle\Validator\IsLetterInfo;

use Symfony\Component\Validator\Constraints\Regex;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use JMS\Serializer\SerializerBuilder;

use AppBundle\Entity\Apprenant;
use AppBundle\Entity\EtablissementApprenant;
use AppBundle\Entity\CursusApprenant;
use AppBundle\Entity\Tuteur;
use AppBundle\Entity\Fichier;
use AppBundle\Entity\EtablissementClasseNiveau;
use AppBundle\Entity\EtablissementClasse;
use AppBundle\Entity\Specialite;
use AppBundle\Utility;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
//use AppBundle\Utility;
//use Symfony\Component\Serializer\Encoder\JsonEncoder;
//use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

use \SafeSchool\UserBundle\Entity\User;


class InscriptionController extends Controller
{
    CONST APPRENANT_ENTITY = 'Apprenant';
    CONST TUTEUR_ENTITY = "Tuteur";


    private $infoInscription;

    public function getInfoInscription(){
        return $this->infoInscription;
    }

    public function setInfoInscription ($infoInscription){
        $this->infoInscription = $infoInscription;
    }

    public function inscriptionAction( Request $request)
    {

        $apprenant = new Apprenant;

        $etablissementApprenant = new EtablissementApprenant;
        $em = $this->getDoctrine()->getManager();

        //$tuteur = new Tuteur;
        $form = $this->createCreateForm($apprenant,InscriptionController::APPRENANT_ENTITY);
        //$formTuteur = $this->createCreateForm($tuteur,InscriptionController::TUTEUR_ENTITY);
        $etablissementId =  $request->get('id');
        $etablissement = $em->getRepository('AppBundle:Etablissement')->find($etablissementId);
        $etablissementFilieres = $em->getRepository('AppBundle:EtablissementClasse')->findByEtablissement($etablissementId);
        //$specialites = $em->getRepository('AppBundle:Specialite')->findAll();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $filiere = $em->getRepository('AppBundle:Classe')->find($request->get('filiere'));                                                                            ;
            $specialite = $em->getRepository('AppBundle:Specialite')->find($request->get('specialite'));
            $niveauEtude = $em->getRepository('AppBundle:NiveauEtude')->find($request->get('niveauetude'));

            $files = $request->files;
            //timestamp
            //die(dump(times()));
            //$array_files = $files->get('fichiers_joints');
            //$bool = false;
            //die(dump($array_files));



                // $fileNameFichiers = array();
                // if(!empty($array_files)){
                // foreach ($array_files as $fichier ) {
                //      $fileNameFichiers[] = $this->get('app.dossier_uploader')->upload($fichier);
                //      //die(dump($fileNameFichiers));
                //      foreach ($fileNameFichiers as $fileName) {
                //         // die(dump($fileName));
                //          $fichierUpload = new Fichier();
                //          $fichierUpload->setNom($fichier->getClientOriginalName())
                //                         ->setUpdatedAt(new \DateTime('now'))
                //                         ->setTypeFichier($fichier->getClientMimeType())
                //                         ->setChemin($fileName);
                //
                //                         //->setApprenant($apprenant);
                //
                //                  }
                //                  $em->persist($fichierUpload);
                //                  $em->flush();
                //
                //                 //die(dump($fichierUpload));
                //      }
                //      $bool = true;
                //
                //      //die(dump($fichierUpload));
                //  }

                    //die(dump(3));
                //$photoCouverture = $photoC;


              //die(dump($fichierUpload));
            //return new JsonResponse ($array_files);
            //$obj = $array_files[0];
            //die(dump($array_files));

            //$tab = array('fdf' =>$obj);
            //$tabS = array('fefe'=>'dfdfdfgd');

            //   SEREALISATION
            //  $normalizer = new ObjectNormalizer();
            //  $normalizers = array($normalizer);
            //  $serializer = new Serializer($normalizers, [new JsonEncoder()]);
            //  $jsonContent = json_encode($serializer->serialize($array_files,'json'));
            // //
             //die(dump($jsonContent));

            //  $encoder = new JsonEncoder();
            //  $normalizer = new ObjectNormalizer();
            //  $normalizer->setIgnoredAttributes(array('pathname','linkTarget'));
            //
            //  $normalizer->setCircularReferenceHandler(function ($object) {
            //      return $object->getSize();
            //  });
            //
            //$serializer = new Serializer(array($normalizer), array($encoder));
            // var_dump($serializer->serialize($array_files, 'json'));
            //$data = $serializer->serialize($array_files, 'json');
            //die(dump($data));
// {"name":"Les-Tilleuls.coop","member


            /*if ($file != null) {
                $fileName = $this->get('app.dossier_uploader')->upload($file);

                $fichier = new Fichier();
                $fichier->setNom($file->getClientOriginalName());
                $fichier->setChemin($fileName);
                $fichier->setUpdatedAt(new \DateTime('now'));
                $fichier->setTypeFichier($file->getClientMimeType());
                $fichier->setApprenant($lastApprenant[0]);
            }*/

            $data = array('apprenant'=>$apprenant);
            return new JsonResponse(array(

                                            'data' => Utility::objectToArray($data),
                                             'filiere' => array(
                                                 'id' => $filiere->getId(),
                                                 'libelle' => $filiere->getLibelleClasse(),
                                             ),
                                             'specialite' => array(
                                                 'id' => $specialite->getId(),
                                                 'libelle' => $specialite->getLibelleSpecialite(),
                                             ),
                                             'niveauEtude' => array(
                                                'id' => $niveauEtude->getId(),
                                                'libelle' => $niveauEtude->getLibelleNiveauEtude()
                                            ),



                                             'error' => false
                                                   ));

        }
        elseif($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(array(
                'data' => $this->getFormErrors($form),
                'error' => true
            ));


        }

        return $this->render('APIInscriptionBundle:inscription:inscription.html.twig', array(
              'form' => $form->createView(),
              'filieres' => $etablissementFilieres,
              'etablissement'=> $etablissement

          ));
    }

    /**
* Creates a form to create an entity.
*
* @param Demo $entity The entity
*
* @return SymfonyComponentFormForm The form
*/
private function createCreateForm($entity,$type)
{
    $classname = '';
    $apprenantClassname = 'Apprenant';
    $tuteurClassname = InscriptionController::TUTEUR_ENTITY;
    //print_r($entity);
    if ($type == InscriptionController::TUTEUR_ENTITY)
    {
        $classname = InscriptionController::TUTEUR_ENTITY;
    }
    else if ($type == InscriptionController::APPRENANT_ENTITY)
    {
        $classname = InscriptionController::APPRENANT_ENTITY;


    }

    $form = $this->createForm('AppBundle\Form\\'.$classname.'Type', $entity);

    return $form;
}

    //fonction pour la génération automatique d'un code

        public function generationCodeAction(Apprenant $apprenant,$prefix = "AP")
        {
            $apprenantSubstreNom = substr($apprenant->getNom(), 0, 1);
            $apprenantSubstreEmail = substr($apprenant->getEmail(), 0, 1);
            srand(time());
            $aleatoire = substr(rand(1000,100000000),5,4);
            $aleatoire2 = substr(rand(1000,1000000000),2,2);
            $aleatoireUnique = $this->uniqidReal();
            $val = new \DateTime();
            $val2 = $val->getTimestamp();
            $variable  = array($aleatoireUnique,substr($val2,8,2).$prefix,$apprenantSubstreNom.$aleatoire2.$apprenantSubstreEmail,$aleatoire );
            //$codeIdentificateurPourConnexion = implode("",$variable);

            return implode("-",$variable);


        }

        public function generationCodeParentAction(Tuteur $tuteur,$prefix = "PA")
        {
            $tuteurSubstreNom = substr($tuteur->getNom(), 0, 1);
            $tuteurSubstrePrenom = substr($tuteur->getPrenom(), 0, 1);
            srand(time());
            $aleatoire = substr(rand(1000,100000000),0,4);
            $aleatoire2 = substr(rand(1000,100000000),4,2);
            $aleatoireUnique = $this->uniqidReal();
            $valP1 = new \DateTime();
            $valP2 = $valP1->getTimestamp();
            $variableP  = array($aleatoireUnique,substr($valP2,6,2).$prefix,$tuteurSubstrePrenom.$aleatoire2.$tuteurSubstreNom,$aleatoire);
            //$variableP = array(substr($valP2,1,4),substr($valP2,3,4),substr($valP2,6,4));
            //$codeIdentificateurPourConnexion = implode("",$variable);

            return implode("-",$variableP);


        }

        function uniqidReal($length = 4) {
        // fonction renvoyant 4 caractere vous pouvez augmentez en modifiant l'argument de la fonction.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($length / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }

        return substr(bin2hex($bytes), 0, $length);
    }

    /**
     *
    */



    public function validationInscriptionAction(Request $request)
    {
        //die(dump($request->files));
        $cursusApprenant = new CursusApprenant;
        $user = new User;
        $etablissementclasse = new EtablissementClasse;
        $etsClasseNiveau = new EtablissementClasseNiveau;
        $specialite = new Specialite;
        $apprenant = new Apprenant;
        $tuteur = new Tuteur;
        $etablissementApprenant = new EtablissementApprenant;
        //die(dump($request));
        $em = $this->getDoctrine()->getManager();

        $niveauEtudeId = $request->get('niveauEtude_id');
        $anne = $request->get('annee');
        $classeId =$request->get('filiere_id');
        $classeA = $em->getRepository('AppBundle:Classe')->find($classeId);
        $classeAp = $classeA->getLibelleClasse();
        $specialiteId = $request->get('specialite_id');

        $etablissementId = $request->get('id');

        $etablissement = $em->getRepository('AppBundle:Etablissement')->find($etablissementId);
        $etablissementclass = $em->getRepository('AppBundle:EtablissementClasse')->findBy(array('classe'=>$classeId,
                                                                                        'etablissement'=>$etablissementId));

        $specialite = $em->getRepository('AppBundle:Specialite')->findBy(array(
            'id' => $specialiteId,
        ));


        $etsClasseNiveau = $em->getRepository('AppBundle:EtablissementClasseNiveau')->findBy(array(
                                                                        'etablissementClasse' =>$etablissementclass,
                                                                        'niveauEtude' =>$niveauEtudeId
                                                                    ));

        $etsClasseNiveauSpecialite =$em->getRepository('AppBundle:EtablissementClasseNiveauSpecialite')->findBy(array(
                                                            'etsClasseNiveau' => $etsClasseNiveau,
                                                            'specialite' => $specialite
        ));

        // creation utilisateur apprenant


        //die(dump($EtablissementClasseNiveauSpecialite));
        //die(dump($sousClasses));
        //Recuperation information sur le tuteur
        $nomTuteur = $request->get('tuteur_nom');
        $prenomTuteur = $request->get('tuteur_prenom');
        $telephoneTuteur = $request->get('tuteur_telephone');
        $lienParenteTuteur = $request->get('tuteur_lienParente');
        $emailTuteur = $request->get('tuteur_email');
        $professionTuteur = $request->get('tuteur_profession');


        //iteration des données dans l'objet Tuteur


        $tuteur->setNom($nomTuteur);
        $tuteur->setPrenom($prenomTuteur);
        $tuteur->setEmail($emailTuteur);
        $tuteur->setTelephone($telephoneTuteur);
        $tuteur->setLienParente($lienParenteTuteur);
        $tuteur->setSexe('N');
        $tuteur->setAdresseVille('null');
        $tuteur->setAdresseRue('null');
        $tuteur->setLieuNaissance('null');
        $tuteur->setProfession($professionTuteur);
        $em->persist($tuteur);
        //$tuteur->setCode($this->generationCodeParentAction($tuteur));
        $lastTuteur = $em->getRepository('AppBundle:Tuteur')->getLastTuteur();

        //die(dump($lastTuteur));

        //ré

        $nomApprenant = $request->get('nom');
        $prenomApprenant = $request->get('prenom');
        $sexeApprenant = $request->get('sexe');
        $emailApprenant = $request->get('email');
        $telephoneApprenant = $request->get('telephone');
        $adresseVilleApprenant = $request->get('adresseVille');
        $dateNaissanceApprenant = $request->get('dateNaissance');
        $nationaliteApp = $request->get('nationalite');
        $anneeNaissance = substr($dateNaissanceApprenant,6,6);
        $moiNaissance = substr($dateNaissanceApprenant,3,2);
        $jourNaissance = substr($dateNaissanceApprenant,0,2);
        $dateNaissanceA = array($anneeNaissance,$moiNaissance,$jourNaissance);
        $dateNaissanceApprena = implode('-',$dateNaissanceA);
        $dt = new \DateTime($dateNaissanceApprena);
        $dt->format('Y-m-d');
        $lieuNaissanceApprenant = $request->get('lieuNaissance');

        $apprenant->setNom($nomApprenant);
        $apprenant->setPrenom($prenomApprenant);
        $apprenant->setSexe($sexeApprenant);
        $apprenant->setEmail($emailApprenant);
        $apprenant->setTelephone($telephoneApprenant);
        $apprenant->setAdresseVille($adresseVilleApprenant);
        $apprenant->setAdresseRue('null');
        $apprenant->setDateNaissance($dt);
        $apprenant->setNationalite($nationaliteApp);
        $apprenant->setLieuNaissance($lieuNaissanceApprenant);
        $apprenant->setTuteur($tuteur);
        $em->persist($apprenant);
        //$apprenant->setCode($this->generationCodeAction($apprenant));
        //$em->persist($userApprenant);
        //
        //$codeTu = $this->generationCodeParentAction($tuteur);
        $codeAp = $this->generationCodeAction($apprenant);
        $userApprenant = $this->createUser($request,$apprenant);
        //$userApprenant->setPassword(password_hash($codeAp, PASSWORD_DEFAULT));
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        //$userApprenant->setApprenant($apprenant);
        $userTuteur = $this->createUser($request,$tuteur);
        //$userTuteur->setTuteur($tuteur);
        //$userTuteur->setPassword($codeTu);
        $codTu = $this->generationCodeParentAction($tuteur);
        $em->persist($userTuteur);
        $em->persist($userApprenant);
        $em->flush();



        //$em->flush();




        //







        $lastApprenant = $em->getRepository('AppBundle:Apprenant')->getApprenant();

        $etablissementApprenant->setEtablissement($etablissement);
        $etablissementApprenant->setApprenant($lastApprenant[0]);

        //die(dump($request));
        $em->persist($etablissementApprenant);
        $em->flush();

        // $fichiersJoints = $request->files->get('fichiers_joints');
        // die(dump($fichiersJoints));
        // $fileNameFichiers = array();
        //     foreach($fichiersJoints as $fichier) {
        //         $fileNameFichiers[] = $this->get('app.dossier_uploader')->upload($fichier);
        //         foreach ($fileNameFichiers as $fileName) {
        //             $fichierUpload = new Fichier();
        //             $fichierUpload->setNom($file->getClientOriginalName())
        //                         ->setChemin($fileName)
        //                         ->setUpdatedAt(new \DateTime('now'))
        //                         ->setTypeFichier($file->getClientMimeType())
        //                         ->setApprenant($apprenant);
        //         }
        //         $fichierUpload->setChemin($fileName);
        //         $em->persist($fichierUpload);
        //         $em->flush();
        //     }


            /*$fileName = $this->get('app.dossier_uploader')->upload($file);

            $fichier = new Fichier();
            $fichier->setNom($file->getClientOriginalName());
            $fichier->setChemin($fileName);
            $fichier->setUpdatedAt(new \DateTime('now'));
            $fichier->setTypeFichier($file->getClientMimeType());
            $fichier->setApprenant($lastApprenant[0]);*/





        //die(dump($fichierUpload));
        //die(dump($fichiersJoints));



        $cursusApprenant->setEtsClasseNiveauSpecialite(($etsClasseNiveauSpecialite[0]));
        $cursusApprenant->setEtablissementApprenant(($etablissementApprenant));
        $cursusApprenant->setClasse($classeAp);
        $cursusApprenant->setStatut('Preinscription');
        $cursusApprenant->setAnneeScolaire($anne);
        //die(dump($cursusApprenant));
        $em->persist($cursusApprenant);
        $em->flush();
        die(dump($codeAp ));
        //die(dump($cursusApprenant));

        //requete pour avoir les objets liés aux id respectifs



        //$fichier = new Fichier;
        /*




        //






        die(dump($request));


        /*$etablissement = $em->getRepository('AppBundle:Etablissement')->find($etablissementId);
        $lastApprenant = $em->getRepository('AppBundle:Apprenant')->getApprenant();


        $etablissementApprenant->setApprenant($lastApprenant[0]);
        $fichier = $em->setApprenant($lastApprenant[0]);
        $tuteur = $em->setApprenant($lastApprenant[0]);
        if ($file != null) {
            $fileName = $this->get('app.dossier_uploader')->upload($file);

            $fichier = new Fichier();
            $fichier->setNom($file->getClientOriginalName());
            $fichier->setChemin($fileName);
            $fichier->setUpdatedAt(new \DateTime('now'));
            $fichier->setTypeFichier($file->getClientMimeType());
            $fichier->setApprenant($lastApprenant[0]);
        }
        $etablissementApprenant->setEtablissement($etablissementId[0]);*/

        //die(dump($filiere));

    }

    public function createUser($request,$acteur){
        $user = new User;

        if($acteur instanceof Apprenant){
            $user->setUsername($this->uniqidReal())
                ->setEmail($request->get('email'))
                ->setUserType('apprenant')
                ->setApprenant($acteur)
                ->setPassword(password_hash($this->generationCodeAction($acteur),PASSWORD_DEFAULT));


        }
        if($acteur instanceof Tuteur){
            $user->setUsername($this->uniqidReal())
                ->setEmail($request->get('tuteur_email'))
                ->setTuteur($acteur)
                ->setUserType('tuteur')
                ->setPassword(password_hash($this->generationCodeParentAction($acteur),PASSWORD_DEFAULT));

                //->setPassword
        }
        return $user;
    }

    protected function getFormErrors(\Symfony\Component\Form\Form $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if(!$child->isValid()){
                $errors[$child->getName()] = $this->getFormErrors($child);

            }

        }
        return $errors;
    }

    public function getListeApprenant()
    {

    }

   public function getSpecialiteByFiliereAction(Request $request)
  {
      $em = $this->getDoctrine()->getManager();
      $classe =  $request->get('id_classe');
      $niveauEtude =  $request->get('id_niveau');

    $etablissement = $em->getRepository('AppBundle:Etablissement')->find($request->get('id'));
    $etablissementclasse = $em->getRepository('AppBundle:EtablissementClasse')->findBy(array('classe'=>$classe,
                                                                                    'etablissement'=>$etablissement));

    $etsClasseNiveau = $em->getRepository('AppBundle:EtablissementClasseNiveau')->findBy(array(
                                                        'etablissementClasse'=>$etablissementclasse,
                                                        'niveauEtude' => $niveauEtude,
                                                    ));
    $etsClasseNiveauSpecialites = $em->getRepository('AppBundle:EtablissementClasseNiveauSpecialite')->findByEtsClasseNiveau($etsClasseNiveau);
    $etablissement_specialite = array();
    //die(dump($etsClasseNiveauSpecialites));
    if(!empty($etsClasseNiveauSpecialites)){

       foreach ($etsClasseNiveauSpecialites as $specialite) {
           $etablissement_specialite [] = array('id' => $specialite->getSpecialite()->getId() ,
                                     'libelle' => $specialite->getSpecialite()->getLibelleSpecialite()
                                 );
       }

}
//die(dump($etablissement_specialite));
    return new JsonResponse($etablissement_specialite);

}


      public function getNiveauByEtablissementAndClasseAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $classe =  $request->get('id_classe');
      //die(dump($classe));
      $etablissement = $em->getRepository('AppBundle:Etablissement')->find($request->get('id'));
     // die(dump($etablissement));
      $etablissementclasse = $em->getRepository('AppBundle:EtablissementClasse')->findBy(array('classe'=>$classe,
                                                                                      'etablissement'=>$etablissement));

    //die(dump($etablissementclasse));
    $niveauEtudes = $em->getRepository('AppBundle:EtablissementClasseNiveau')->getNiveauByEtablissementAndClasse($etablissementclasse);
    $etablissement_niveauEtude = array();
      if(!empty($niveauEtudes)){

         foreach ($niveauEtudes as $niveauEtude ) {
             $etablissement_niveauEtude [] = array('id' => $niveauEtude->getNiveauEtude()->getId() ,
                                       'libelle' =>  $niveauEtude->getNiveauEtude()->getLibelleNiveauEtude()
                                   );
         }
  }

      return new JsonResponse($etablissement_niveauEtude);

    }


    public function getListeApprenantByEtablissementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
    }



}
