<?php
class User extends FileData {

  function generateUserFile(){
    //This fucntion should only be called once and ideally from somewhere it later is disabled.
  }

  function verifyUserFile(){
    //This function should check whether the user file exists, and if it does not return a false value
  }

  function hashPassword($password){
    //this is set to Use the Argon2id hashing algorithm to create the hash. This algorithm is only available if PHP has been compiled with Argon2 support.

    return password_hash($password,PASSWORD_ARGON2ID);
  }
  function checkPassword($password,$username){
    // this function needs to check that the stored hash matches the password stored for that user in the login file
    // https://www.php.net/manual/en/function.password-hash.php -- need to learn more about hashing passwords
    return password_verify($password,$username);
  }
  function addUser($username, $password){
    //This function will need to be able to add users to the the user registration files
  }
}
