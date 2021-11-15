<?php
class FileData {
  public function getFiles($directory){
    $files_found = scandir($directory);
    foreach ($files_found as $key => $value) {
      $meta = pathinfo($value);
      if ($meta['extension'] === "json") {
        $json_files[]=$meta['basename'];
      }
    }
    return $json_files;
  }
  public function checkFileExists($directory,$fileName){
    
  }
  public function getFileContent($fileName){

  }
}
