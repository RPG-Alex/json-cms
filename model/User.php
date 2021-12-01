<?php
class User extends FileData {
  public function getUserData($user,$pw){

  }
  public function checkUserExists($userID){
    
  }
  public function hashPassword($password){
    //this is set to Use the Argon2id hashing algorithm to create the hash. This algorithm is only available if PHP has been compiled with Argon2 support.

    return password_hash($password,PASSWORD_ARGON2ID);
  }
  public function checkPassword($password,$username){
    // this function needs to check that the stored hash matches the password stored for that user in the login file
    // https://www.php.net/manual/en/function.password-hash.php -- need to learn more about hashing passwords
    return password_verify($password,$username);
  }
  public function addUser($username, $password){
    //This function will need to be able to add users to the the user registration files
  }
}
