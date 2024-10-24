<?php

declare(strict_types=1);

class SignupControl extends SignupModel {
  private $username;
  private $password;
  private $checkPassword;
  private $email;

  function __construct(string $username, string $password, string $checkPassword, string $email)
  {
    $this->username = $this->sanitize_input($username);
    $this->password = $this->sanitize_input($password);
    $this->checkPassword = $this->sanitize_input($checkPassword);
    $this->email = $this->sanitize_input($email);
  }

  public function signup() {
    $errors = [];
    
    if ($this->emptyInputs()) {
      $errors["missing_input"] = "Please complete all the fields";
    } else {

      if ($this->isUsernameInvalid()) {
        $errors["username_error"] = "Must be alphanumeric 5 to 25 characters long";
      }
  
      if ($this->isUsernameTaken()) {
        $errors["username_taken"] = "Username is taken";
      }
  
      if ($this->isPasswordInvalid()) {
        $errors["password_error"] = "Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, one number, and one special character.";
      }else if ($this->passwordMismatch()) {
        $errors["password_mismatch"] = "Password did not match";
      }
  
      if ($this->invalidEmail()) {
        $errors["email_error"] = "Please enter a valid email";
      }
  
      if ($this->isEmailTaken()) {
        $errors["email_taken"] = "Email is already used";
      }

    }


    if ($errors) {
      $_SESSION["signup_errors"] = $errors;
      
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

  private function sanitize_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}