<?php
//just decided to set a variable to post and gets, no reason yet, just trying it out
$path = $_GET;
$input = $_POST;
//
if ($path['post'] != '') {
  echo "this should get a post";
}
