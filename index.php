<?php
// dev stuff delete in production
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//Temporary Includes section. Don't forget to update as needed
include_once "config/config.php";
//include_once "model/Posts.php";
include_once "controller/get_handler.php";
//sets active directory globally for data
$data_dir = APPROOT."/data/";

//include_once "tester.php";

var_dump($_GET);
var_dump($_POST);

include_once "model/FileData.php";

$FindMe = new FileData;
if ($FindMe->checkFileIsJson($data_dir."posts.json") === true) {
  $data = $FindMe->getFileContentFromJson($data_dir."posts.json");
}

//This is just concept but this is how you access the POST content alex! its STD class so its like this. VIola.
echo $data->Posts[0]->Title;

echo $data->Posts[0]->Content;

echo "<br>";

include_once "tester.php";
