<?php

namespace API\MediathequeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class DriveController
{
  // This function scans the files folder recursively, and builds a large array
  public static function scan($dir)
  {

    $files = array();

    // Is there actually such a folder/file?

    if(file_exists($dir)){

      foreach(scandir($dir) as $f) {

        if(!$f || $f[0] == '.'||  $f == "Corbeille" || $f == "thumbsnail" ){
          continue; // Ignore hidden files
        }

        if(is_dir($dir . '/' . $f)) {

          // The path is a folder

          $files[] = array(
            "name" => $f,
            "type" => "folder",
            "path" => $dir."/".$f,
            "items" => DriveController::scan($dir ."/". $f) // Recursively get the contents of the folder
          );
        }

        else {

          // It is a file

          $files[] = array(
            "name" => $f,
            "type" => "file",
            "path" => $dir."/".$f,
            "size" => filesize($dir . '/' . $f) // Gets the size of this file
          );
        }
      }

    }

    return $files;
  }

}
