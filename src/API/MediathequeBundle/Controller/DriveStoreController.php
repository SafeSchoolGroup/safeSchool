<?php

namespace API\MediathequeBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use API\MediathequeBundle\Controller\DriveController;
use API\MediathequeBundle\Controller\FineUploaderController;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use API\MediathequeBundle\DriveStoreInterface\DriveStoreClassMethods;
use Symfony\Component\Filesystem\Filesystem;


class DriveStoreController extends Controller
{

  CONST DIR_ROOT = "/home/Project_symfony/safeSchool/web/Drive/" ;

  public function indexAction()
    {
      return $this->render('APIMediathequeBundle:driveStore:home.html.twig');

    }

    public function findAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
        $drivepath = $request->get('path');

        $driveStoreMethods = DriveStoreClassMethods::getInstance();
        if(!file_exists(DriveStoreController::DIR_ROOT.$user)){

            //create user and his mediatheque
            $driveStoreMethods->create(DriveStoreController::DIR_ROOT.$user);
            $driveStoreMethods->create(DriveStoreController::DIR_ROOT.$user."/MEDIATHEQUE");
            $driveStoreMethods->create(DriveStoreController::DIR_ROOT.$user."/MEDIATHEQUE/Corbeille");

            $em = $this->getDoctrine()->getManager();
            $driveStoreMethods->drivePersist($user,"","user", DriveStoreController::DIR_ROOT.$user."/",$em);
            $driveStoreMethods->drivePersist($user,"MEDIATHEQUE","create", DriveStoreController::DIR_ROOT.$user."/",$em);
            $driveStoreMethods->drivePersist($user."/MEDIATHEQUE","Corbeille","create", DriveStoreController::DIR_ROOT.$user."/",$em);

           }

        $dir = DriveStoreController::DIR_ROOT.$user."/".$drivepath;

        $response = DriveController::scan($dir);

        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $drivepath,
            "items" => $response,
            "user" => $user
        ));

    }

    public function checkAction(Request $request){
        $user = $this->getUser()->getUsername();
        $exist = false;
        $destDir = $request->request->get('destdir');
        $fileTocheck = $request->request->get('fileforchecking');
        $dir =  DriveStoreController::DIR_ROOT.$user."/".$destDir."/".$fileTocheck;

        if (file_exists($dir)) {
            $exist = true;
        }
        return new JsonResponse(array(
                'check' => $exist )
        );
    }


    public function createAction(Request $request)
      {
          $user = $this->getUser()->getUsername();
        $newFolderPath = $request->request->get('sourcepathdir');
        $newFolderName = $request->request->get('destpathdir');
        $actionToDo = $request->request->get('actionToDo');

        $fullNewFolderPath =  DriveStoreController::DIR_ROOT.$user."/".$newFolderPath."/".$newFolderName ;
        $driveStoreMethods = DriveStoreClassMethods::getInstance();
        $result = $driveStoreMethods->create($fullNewFolderPath);
        if($result['status'])
          {
              $em = $this->getDoctrine()->getManager();
             $driveStoreMethods->drivePersist($user."/".$newFolderPath,$newFolderName,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
          }

            $response = DriveController::scan(DriveStoreController::DIR_ROOT.$user."/".$newFolderPath);
            return new JsonResponse(array(
                "name" => "files",
                "type" => "folder",
                "path" => $newFolderPath,
                "items" => $response,
                "result" => $result
              ));

    }

    public function removeAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
      $targetDirToRemove = $request->request->get('sourcepathdir');
      $targetPathToRemove = $request->request->get('destpathdir');
      $actionToDo = $request->request->get('actionToDo');
      $user = "Sidoine";

      $fullTargetDirToRemove =  DriveStoreController::DIR_ROOT.$user."/".$targetDirToRemove ;
      $driveStoreMethods = DriveStoreClassMethods::getInstance();

      $tab = explode("/", $targetDirToRemove);
      $Corbeille = false;
      for($i=0;$i<count($tab);$i++){
        if($tab[$i] === "Corbeille"){
          $Corbeille = true;
        }
      }
      if($Corbeille){
        $result = $driveStoreMethods->remove($fullTargetDirToRemove);
        if($result['status'])
          {
            $em = $this->getDoctrine()->getManager();
            $driveStoreMethods->drivePersist($user."/".$targetDirToRemove,$user."/".$targetPathToRemove,
            $actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
          }
      }
      else{
        $fs = new Filesystem();
        if(!file_exists(DriveStoreController::DIR_ROOT.$user."/MEDIATHEQUE/Corbeille")){
          $driveStoreMethods->create(DriveStoreController::DIR_ROOT.$user."/MEDIATHEQUE/Corbeille");
        }

        $result = $driveStoreMethods ->copy($fullTargetDirToRemove,DriveStoreController::DIR_ROOT.$user."/MEDIATHEQUE/Corbeille");
         $driveStoreMethods->remove($fullTargetDirToRemove);
        if($result['status'])
          {
            $em = $this->getDoctrine()->getManager();
            $driveStoreMethods->drivePersist($user."/".$targetDirToRemove,$user."/".$targetPathToRemove,
            "trash", DriveStoreController::DIR_ROOT.$user."/",$em);
          }
      }
        $response = DriveController::scan(DriveStoreController::DIR_ROOT.$user."/".$targetPathToRemove);
        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $targetPathToRemove,
            "items" => $response,
            "result" => $result
          ));


    }


    public function copyAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
      $targetDirToCopy = $request->request->get('sourcepathdir');
      $destinationPath = $request->request->get('destpathdir');
      $actionToDo = $request->request->get('actionToDo');

      $fullTargetDirToCopy =  DriveStoreController::DIR_ROOT.$user."/".$targetDirToCopy ;
      $driveStoreMethods = DriveStoreClassMethods::getInstance();
      $result = $driveStoreMethods->copy($fullTargetDirToCopy,DriveStoreController::DIR_ROOT.$user."/".$destinationPath);
      if($result['status'])
        {
          $em = $this->getDoctrine()->getManager();
         $driveStoreMethods->drivePersist($user."/".$targetDirToCopy,$user."/".$destinationPath,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
        }

        $response = DriveController::scan( DriveStoreController::DIR_ROOT.$user."/".$destinationPath);

        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $destinationPath,
            "items" => $response,
            "result" => $result
        ));

    }


    public function moveAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
      $targetDirToMove = $request->request->get('sourcepathdir');
      $destinationPath = $request->request->get('destpathdir');
      $actionToDo = $request->request->get('actionToDo');

      $fullTargetDirToMove =  DriveStoreController::DIR_ROOT.$user."/".$targetDirToMove ;
      $driveStoreMethods = DriveStoreClassMethods::getInstance();
      $result = $driveStoreMethods->move($fullTargetDirToMove,DriveStoreController::DIR_ROOT.$user."/".$destinationPath) ;
      if($result['status'])
        {
          $em = $this->getDoctrine()->getManager();
          $driveStoreMethods->drivePersist($user."/".$targetDirToMove,$user."/".$destinationPath,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
        }

        $response = DriveController::scan( DriveStoreController::DIR_ROOT.$user."/".$destinationPath);

        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $destinationPath,
            "items" => $response,
            "result" => $result
        ));

    }

    public function renameAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
      $targetDirToRename = $request->request->get('sourcepathdir');
      $newName = $request->request->get('destpathdir');
      $actionToDo = $request->request->get('actionToDo');
      if($newName === ""){
        return new JsonResponse(array(
          "response" => "veillez entrer un nom !"
        ));
      }

      $fullTargetDirToRename =  DriveStoreController::DIR_ROOT.$user."/".$targetDirToRename ;
      $driveStoreMethods = DriveStoreClassMethods::getInstance();
      $result = $driveStoreMethods->rename($fullTargetDirToRename,$newName) ;
      if($result['status'])
        {
          $em = $this->getDoctrine()->getManager();
          $driveStoreMethods->drivePersist($user."/".$targetDirToRename,$newName,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
        }

        $folderToScan = $driveStoreMethods->directoryExploder($targetDirToRename);
        $response = DriveController::scan(DriveStoreController::DIR_ROOT.$user."/".$folderToScan);

        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $folderToScan,
            "items" => $response,
            "result" => $result
        ));
    }

    public function restaureAction(Request $request)
    {
        $user = $this->getUser()->getUsername();
      $targetDirToRestaure = $request->request->get('elementclicked');
      $actionToDo = "restaure" ;

      $em = $this->getDoctrine()->getManager();
      $driveStoreMethods = DriveStoreClassMethods::getInstance();
      $name = $driveStoreMethods->directoryExploder($user."/".$targetDirToRestaure,"name");
      $parentid = $em->getRepository('AppBundle:UploadedFile')->findBy(array('name' => $name,'action' => "trash") );

      $srcpathOrOldname = $parentid[0]->getSrcpathOrOldname('srcpathOrOldname');
      $destinationPath = DriveStoreController::DIR_ROOT.$user."/".$srcpathOrOldname ;
      $fullTargetDirToRestaure = DriveStoreController::DIR_ROOT.$user."/".$targetDirToRestaure ;
      $result = $driveStoreMethods->copy($fullTargetDirToRestaure,$destinationPath);
      if($result['status'])
        {
          $driveStoreMethods->remove($fullTargetDirToRestaure);
          $em = $this->getDoctrine()->getManager();
         $driveStoreMethods->drivePersist($user."/".$targetDirToRestaure,$srcpathOrOldname,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
        }

        $folderToScan = $driveStoreMethods->directoryExploder($targetDirToRestaure);
        $response = DriveController::scan(DriveStoreController::DIR_ROOT.$user."/".$folderToScan);

        return new JsonResponse(array(
            "name" => "files",
            "type" => "folder",
            "path" => $folderToScan,
            "items" => $response,
            "result" => $result
        ));

    }


  public function driveFilesUploadAction(Request $request){

      $user = $this->getUser()->getUsername();
      $fileToUpload = $request->files->get('file');
    $pathWhereToUpload = $request->request->get('pathWhereToUpload');
    $actionToDo = "upload";


    $fullPathWhereToUpload =  DriveStoreController::DIR_ROOT.$user."/".$pathWhereToUpload;
    $uploadedFileName = $this->get('app.driveStore_uploader')
                              ->setTargetDir($fullPathWhereToUpload)->upload($fileToUpload);
    if(!empty($uploadedFileName))
      {
        $em = $this->getDoctrine()->getManager();
        $driveStoreMethods = DriveStoreClassMethods::getInstance();
        $driveStoreMethods->drivePersist($uploadedFileName,$user."/".$pathWhereToUpload,$actionToDo, DriveStoreController::DIR_ROOT.$user."/",$em);
      }

    return new JsonResponse(array(
        "response" => true
      ));

    }


}
