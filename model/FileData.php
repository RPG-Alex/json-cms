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
  public function checkFileIsJson($fileName){
    //This funciton is simply used to verify that a file is json
    $fileInfo = pathinfo($fileName);
    if ($fileInfo['extension'] === 'json') {
      return true;
    } else {
      return false;
    }
  }
  public function getFileContentFromJson($fileName){
      $content = file_get_contents($fileName);
      return json_decode($content);
  }
  public function createNewJSONFile($input_data){
    //need to work on this function. Currently it works. But need to work on it more. Catch functionality needs to be flusehd out. Also need to decide on the structure of data....
    $json_data = json_encode($input_data);
    return file_put_contents($input_data['Title'].".json",$json_data);
  }
}
