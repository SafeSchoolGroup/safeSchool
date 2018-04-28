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

 interface DriveStoreInterface{

   /**
    * help to get parent directory on path given or the name of path if name given
    *
    * @param string $targetPath  the path to be sent
    * @param string $fileName  optional parameter to be sent
    *
    * @return string return the full path if name not given otherwise return only the name
    */
  public function directoryExploder($targetPath,$fileName=NULL);

  /**
   * guess file extension on file given
   *
   * @param $file  file link
   *
   * @return string return extension
   */
 public function guessFileExtension($file);


 /**
  * create folder
  *
  * @param string $path path of folder to be created
  *
  * @return string return status
  */
 public function create($path);

 /**
  * remove folder or file
  *
  * @param string $targetPath folder or file link to be removed
  *
  * @return string return status
  */
 public function remove($targetPath);

 /**
  * copy folder or file to an other folder
  *
  * @param string $targetPath  folder or file link to be removed
  *
  * @return string return status
  */
 public function copy($targetSource,$destinationPath);

 /**
  * move folder or file to an other folder
  *
  * @param string $targetSource  folder or file link to be moved
  * @param string $destinationPath  folder in which to move
  *
  * @return string return status
  */
 public function move($targetSource,$destinationPath);


 /**
  * rename folder or file
  *
  * @param string $targetPath  folder or file link to be renamed
  * @param string $newname  new name
  *
  * @return string return status
  */
 public function rename($targetPath,$newName);

 /**
  * persist informations about anything in database like history
  *
  * @param string $firstPath  can be path or file link
  * @param string $secondPath  can be path or file link
  * @param string $actionToDo  what is going to be done (create,copy,move,rename,remove,upload)
  * @param string $dir_root   root directory on the server
  * @param string $em help to call getRepository()
  */
public function drivePersist($firstPath,$secondPath,$actionToDo,$dir_root,$em);

 }
