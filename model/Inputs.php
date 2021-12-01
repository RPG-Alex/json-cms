<?php
class Inputs {
  //Need methods here for what? maybe email? For login? Maybe just anything that isn't basic typing stuff?
  public function stringClean($string){
      return filter_var($string, FILTER_SANITIZE_STRING);
  }
  public function checkIsInt($int){
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
      return true;
    } else {
      return false;
    }
  }
  public function checkValidEmail($email){
    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      return true;
    } else {
      return false;
    }
  }
}
