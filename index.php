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
$test = $FindMe->preparePost("Lofi",12,"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
var_dump($test);

include_once "tester.php";
// include_once "model/Inputs.php";
