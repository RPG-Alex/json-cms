<?php
class Posts extends FileData {
  public function prepaerPost($newPostData) {

  }
  public function getHighestPostID(){
    //Identical to getNewPostID but does not increment
    $postIDs = [];
    foreach ($postsJson as $post){
      $postIDs[] = $post->PostID;
    }
    $lastID = max($postIDs);
    return $lastID;
  }
  public function getNewPostID($postsJson){
    //This function will get the highest post ID, and iterate it by 1.
    $postIDs = [];
    foreach ($postsJson as $post){
      $postIDs[] = $post->PostID;
    }
    //Should make this fail gracefully later on.
    $lastID = max($postIDs);
    $lastID++;
    return $lastID;
  }
  public function addPost($title,$id,$content){

  }
}
