<?php
class FileData {
  public function getAllFiles($directory){
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
    $files_found = scandir($directory);
    $found = false;
    //This will need to be modified to search for filenames without the file extension, using pathinfo later, depending on how I make it work
    for ($i=0; $i < count($files_found) ; $i++) {
      if ($files_found[$i] === $fileName) {
        $found = true;
      }
    }
    return $found;
  }
  public function getFileContent($fileName){

  }
}
