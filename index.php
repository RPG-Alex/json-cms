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
include_once "model/Posts.php";
$FindMe = new Posts;
if ($FindMe->checkFileIsJson($data_dir."test.json") === true) {
  $data = $FindMe->getFileContentFromJson($data_dir."test.json");
}

//This is just concept but this is how you access the POST content alex! its STD class so its like this. VIola.
//echo ($data[0]->Content);
$harvey = $FindMe->getFileContentFromJson($data_dir."test.json");
echo $chocka_con = $FindMe->getNewPostID($harvey);

include_once "tester.php";
include_once "model/Inputs.php";
//This needs to be added to the controller. This will be how data is accepted from a post and added to the stack of posts, before being placed into the updated file
$data[] = [
  'Title' => $_POST['title'],
  'Content' => $_POST['content'],
  'PostID' => 3
];
