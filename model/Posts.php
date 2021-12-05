<?php
class Posts extends FileData {
  private $FileData = new FileData;
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
    $isFile = $this->FileData->checkFileExists($file);
    if ($isFile === true){
      //This function will need to read the content from the file, then ammend the new post, and then insert this to the new file.
    }
  }
}
