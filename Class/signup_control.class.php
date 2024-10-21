<?php

declare(strict_types=1);

class SignupControl extends SignupModel {
  private $username;
  private $password;
  private $checkPassword;
  private $email;

  function __construct(string $username, string $password, string $checkPassword, string $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->checkPassword = $checkPassword;
    $this->email = $email;
  }

  public function signup() {
    
    // if ($this->emptyInputs()) {
    //   $_SESSION["missing_input"] = "Please complete all the fields";
    // }

    if ($this->isUsernameInvalid()) {
      $_SESSION["username_error"] = "Must be alphanumeric 5 to 25 characters long";
    }

    if ($this->isUsernameTaken()) {
      $_SESSION["username_taken"] = "Username is taken";
    }

    if (!empty($this->password) && $this->isPasswordInvalid()) {
      $_SESSION["password_error"] = "Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, one number, and one special character.";
    }else if ($this->passwordMismatch()) {
      $_SESSION["password_mismatch"] = "Password did not match";
    }

    if ($this->invalidEmail()) {
      $_SESSION["email_error"] = "Please enter a valid email";
    }


    if ($this->isEmailTaken()) {
      $_SESSION["email_taken"] = "Email is already used";
    }

    if (isset($_SESSION["missing_input"]) || isset($_SESSION["username_error"])|| isset($_SESSION["password_error"]) || isset($_SESSION["password_mismatch"]) || isset($_SESSION["email_error"]) || isset($_SESSION["username_taken"]) || isset($_SESSION["email_taken"])) {
      
      $_SESSION["username"] = $this->username;
      $_SESSION["email"] = $this->email;
      header("Location: ../signup/index.php?errors=true");
      die();
    }

    parent::createUser($this->username, $this->password, $this->email);
  }

  private function emptyInputs() {
    if (empty($this->username) || empty($this->password) || empty($this->checkPassword) || empty($this->email)) {
      return true;
    } else {
      return false;
    }
  }

  private function isUsernameInvalid() {
    if(!preg_match("/^[a-zA-Z0-9]{5,25}$/", $this->username)) {
      return true;
    } else {
      false;
    }
  }

  private function isUsernameTaken() {
    if (parent::checkUsername($this->username)) {
      return true;
    } else {
      false;
    }
  }

  private function isPasswordInvalid() {
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $this->password)) {
      return true;
    } else {
      return false;
    }
  }

  private function passwordMismatch() {
    if($this->password !== $this->checkPassword) {
      return true;
    } else {
      return false;
    }
  }
  
  private function invalidEmail() {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  private function isEmailTaken() {
    if (parent::checkEmail($this->email)) {
      return true;
    } else {
      false;
    }
  }

  // private function sanitize_input($data)
  // {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }
}