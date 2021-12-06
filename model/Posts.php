<?php
class Posts extends FileData {
  public function getLatestPostID(){
    //This function will get the highest post ID
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
  public function preparePost($title,$id,$content){
    $newPost = [
      "Title"=>$title ,
      "PostID"=>$id,
      "Content"=>$content
    ];
    //Need to figure out whether to json encode here or to encode with all posts in addPost
    $json = json_encode($newPost);
    return $json;
  }
  public function addPost($file,$newPost){
    //Need to fix issues with encoding this to json
    $originalData = file_get_contents($file);
    $decode = $originalData;
    $decode .=$newPost;
    $encode = $decode;
    //This function adds the content to the file. Still experimenting with
    return file_put_contents($file,$encode,LOCK_EX);
  }
}
