<?php
class Posts extends FileData {

}


//This is how to nest arrays, will encode as json
$try = [
  "Posts" => [[
    "num" => 1,
    "Title" => "The dogs of war",
    "Body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ],[
    "num" => 2,
    "Title" => "How did we end up like this",
    "Body" => "Phantom pains"
  ]]
];
