<?php
/**
 * A singleton mime type to file extension guesser.
 *
 * A default guesser is provided.
 * You can register custom guessers by calling the register()
 * method on the singleton instance:
 *
 *     $guesser = ExtensionGuesser::getInstance();
 *     $guesser->register(new MyCustomExtensionGuesser());
 *
 * The last registered guesser is preferred over previously registered ones.
 */


 namespace API\MediathequeBundle\DriveStoreInterface;

 use Symfony\Component\Filesystem\Filesystem;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use AppBundle\Entity\UploadedFile as OwnUploadedFile;
 use API\MediathequeBundle\DriveStoreInterface\DriveStoreInterface;
 use Symfony\Component\Filesystem\Exception\IOExceptionInterface;


class DriveStoreClassMethods extends Controller implements DriveStoreInterface
{
    private $response = array('status' => false, 'message' => null);


    /**
 * The singleton instance.
 *
 * @var DriveStoreClassMethods
 */
private static $instance = null;


/**
 * Returns the singleton instance.
 *
 * @return self
 */
public static function getInstance()
{
    if (null === self::$instance) {
        self::$instance = new self();
    }

    return self::$instance;
}

      public function directoryExploder($targetPath,$fileName=NULL)
      {
        $tab = explode("/", $targetPath);
          $path = "" ;
          $numb = count($tab);
          $name = $tab[$numb-1];

        if($numb>1){
            $path = $tab[0];
          for($i=1;$i<$numb-1;$i++){
          $path = $path."/".$tab[$i];
              }
            }

          if($fileName === "name"){

            return $name ;
            }
            else{
                if($path === ""){
                return "/" ;
                }
                else{
                    return $path ;
                }

            }

      }

      public function guessFileExtension($file)
      {
        $tab = explode(".", $file);
        $numb = count($tab);
        $extension = "" ;
        if($numb>2){
        //if(strtolower($tab[count($tab)-2])=="html"){
        for($i=1;$i<=$numb-1;$i++){
          $extension = $extension.".".$tab[$i];
        }
      }
        else{
          $extension = $tab[1];
        }
          return $extension;
      }


    public function create($path)
    {
      //create the folder;
      $fs = new Filesystem();
      try {
          $fs->mkdir($path, 777);
          $resp = " Dossier créé avec succès !";
          $response['status']= true;
          $response['message']= $resp;
      } catch (IOExceptionInterface $e) {
          $resp = "Une erreur s'est produite lors de la création du dossier !";
          $response['status']= false;
          $response['message']= $resp;
      }
      return $response ;
    }


     public function remove($targetPath)
     {
       $fs = new Filesystem();
          try {
              $fs->remove($targetPath);
              $resp = "supprimé  avec succès !";
              $response['status']= true;
              $response['message']= $resp;
              } catch (IOExceptionInterface $e) {
                 $resp = "Une erreur s'est produite lors de la suppression ";
                 $response['status']= false;
                 $response['message']= $resp;
                }
        return $response ;
     }

    public function copy($targetSource,$destinationPath)
    {

      if (is_dir($targetSource)) {
        $fs = new Filesystem();
              try {
                  $fs->mirror($targetSource,$destinationPath);
                  $resp = "Dossier copié avec succès !";
                  $response['status']= true;
                  $response['message']= $resp;
              } catch (IOExceptionInterface $e) {
                  $resp = "Une erreur s'est produite lors de la copie du dossier !";
                  $response['status']= false;
                  $response['message']= $resp;
              }

      }
      else {
            $fs = new Filesystem();
              try {
                  $fs->copy($targetSource,$destinationPath,true);
                  $resp = "Ficher copié avec succès !";
                  $response['status']= true;
                  $response['message']= $resp;
              } catch (IOExceptionInterface $e) {
                  $resp = "Une erreur s'est produite lors de la copie du fichier ! ";
                  $response['status']= false;
                  $response['message']= $resp;
              }

      }
      return $response ;
    }


    public function move($targetSource,$destinationPath)
    {

      if (is_dir($targetSource)) {
        $fs = new Filesystem();
              try {
                  $fs->mirror($targetSource,$destinationPath);
                  $fs->remove($targetSource);
                  $resp = "Dossier déplacé avec succès !";
                  $response['status']= true;
                  $response['message']= $resp;
              } catch (IOExceptionInterface $e) {
                  $resp = "Une erreur s'est produite lors du déplacement !";
                  $response['status']= false;
                  $response['message']= $resp;
              }

      }
      else {
            $fs = new Filesystem();
              try {
                  $fs->copy($targetSource,$destinationPath,true);
                  $fs->remove($targetSource);
                  $resp = "Ficher déplacé avec succès !";
                  $response['status']= true;
                  $response['message']= $resp;
              } catch (IOExceptionInterface $e) {
                  $resp = "Une erreur s'est produite lors du déplacement ";
                  $response['status']= false;
                  $response['message']= $resp;
              }

      }
      return $response ;
    }


    public function rename($targetPath,$newName)
    {
      if(is_dir($targetPath)) {
          $newTarget = $this->directoryExploder($targetPath)."/".$newName;
      }
      else{
        //get the extention of the files
        $name = $this->directoryExploder($targetPath,"name");
        $fileExtension = $this->guessFileExtension($name);
        $newTarget =  $this->directoryExploder($targetPath)."/".$newName.".".$fileExtension;
      }

      $fs = new Filesystem();
      try {
        $fs->rename($targetPath, $newTarget);
        $resp = "Fichier renommé avec succès !";
        $response['status']= true;
        $response['message']= $resp;
      } catch (IOExceptionInterface $e) {
        $resp = "Une erreur s'est produite lors du rennomage du fichier ";
        $response['status']= false;
        $response['message']= $resp;
      }
      return $response ;
    }


    public function drivePersist($firstPath,$secondPath,$actionToDo,$dir_root,$em)
    {

          if($actionToDo === "create" )
          {
            // get parent folder informations from database
            $parentDir = $this->directoryExploder($firstPath);
            $parentName =  $this->directoryExploder($firstPath,"name");
            $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array('path' => $parentDir,
                'name' => $parentName) );

            // save informations and persist them
            $driveDocument = new OwnUploadedFile;
            $driveDocument->setParentFolder($parentid[0]);
            $driveDocument->setAction($actionToDo);
            $driveDocument->setSrcpathOrOldname(NULL);
            $driveDocument->setPath($firstPath);
            $driveDocument->setName($secondPath);
            $driveDocument->setType("folder");
            $em->persist($driveDocument);
            $em->flush();

          }

          if($actionToDo === "remove" )
          {
            // get parent folder informations from database
            $parentDir = $this->directoryExploder($secondPath);
            $parentName =  $this->directoryExploder($secondPath,"name");
            $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array(
                'path' => $parentDir,
                'name' => $parentName) );

            // save informations and persist them
            $targetName = $this->directoryExploder($firstPath,"name");
            $driveDocument = new OwnUploadedFile;
            $driveDocument->setParentFolder($parentid[0]);
            $driveDocument->setAction($actionToDo);
            $driveDocument->setSrcpathOrOldname(NULL);
            $driveDocument->setPath($secondPath);
            $driveDocument->setName($targetName);
            if(is_dir($dir_root.$firstPath)){
            $driveDocument->setType("folder");
            }
            else{
            $driveDocument->setType("file");
            }
            $em->persist($driveDocument);
            $em->flush();

          }

          if($actionToDo === "copy" || $actionToDo === "move" || $actionToDo === "trash" || $actionToDo === "restaure")
          {
            // get parent folder informations from database
            $targetPath = $this->directoryExploder($firstPath);
            $targetName = $this->directoryExploder($firstPath,"name");
            $parentDir = $this->directoryExploder($targetPath);
            $parentName = $this->directoryExploder($targetPath,"name");
            $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array('path' => $parentDir,
                'name' => $parentName) );

            // save informations and persist them
            $driveDocument = new OwnUploadedFile;
            $driveDocument->setParentFolder($parentid[0]);
            $driveDocument->setAction($actionToDo);
            $driveDocument->setSrcpathOrOldname($targetPath);
            $driveDocument->setPath($secondPath);
            $driveDocument->setName($targetName);
            if(is_dir($dir_root.$firstPath)){
            $driveDocument->setType("folder");
            }
            else{
            $driveDocument->setType("file");
            }
            $em->persist($driveDocument);
            $em->flush();

          }

        if($actionToDo === "rename" )
        {
            // get parent folder informations from database
            $targetPath = $this->directoryExploder($firstPath);
            $targetName = $this->directoryExploder($firstPath,"name");
            $parentDir = $this->directoryExploder($targetPath);
            $parentName = $this->directoryExploder($targetPath,"name");
            $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array(
                'path' => $parentDir,
                'name' => $parentName));

            // save informations and persist them
            $driveDocument = new OwnUploadedFile;
            $driveDocument->setParentFolder($parentid[0]);
            $driveDocument->setAction($actionToDo);
            $driveDocument->setSrcpathOrOldname($targetName);
            $driveDocument->setPath($targetPath);
            $driveDocument->setName($secondPath);
            if(is_dir($dir_root.$firstPath)){
            $driveDocument->setType("folder");
            }
            else{
            $driveDocument->setType("file");
            }
            $em->persist($driveDocument);
            $em->flush();

        }

        if($actionToDo === "upload" )
        {
          $fullUploadDir = $dir_root.$secondPath;

          //get parentId
          $parentDir = $this->directoryExploder($secondPath);
          $parentName = $this->directoryExploder($secondPath,"name");
          $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array(
              'path' => $parentDir,
            'name' => $parentName));

          //save in database
          $driveDocument = new OwnUploadedFile;
          $driveDocument->setName($firstPath);
          $driveDocument->setType("file");
          $driveDocument->setPath($secondPath);
          $driveDocument->setSrcpathOrOldname(NULL);
          $driveDocument->setAction($actionToDo);
          $driveDocument->setParentFolder($parentid[0]);

         // die(dump($driveDocument));
          $em->persist($driveDocument);
          $em->flush();
        }

        if($actionToDo === "user"){
            //save in database
            $driveDocument = new OwnUploadedFile;
            $driveDocument->setName($firstPath);
            $driveDocument->setType("folder");
            $driveDocument->setPath("/");
            $driveDocument->setSrcpathOrOldname(NULL);
            $driveDocument->setAction($actionToDo);
            $driveDocument->setParentFolder(null);
            $em->persist($driveDocument);
            $em->flush();
        }
    }

}
