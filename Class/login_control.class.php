<?php

declare(strict_types=1);

class LoginControl extends LoginModel {
  private $username_or_email;
  private $password;

  function __construct(string $username_or_email, string $password)
  {
    $this->username_or_email = $this->sanitize_input($username_or_email);
    $this->password = $this->sanitize_input($password);
  }

  // Create login method
  public function login_user() {
    $userData = parent::getUser($this->username_or_email, $this->check_if_username());
    if (!$userData) {
      $_SESSION["login_error"] = "User does not exist";
    }else if ($this->is_password_incorrect($this->password, $userData['pwd'])) {
      $error = $this->check_if_username() ? "Wrong username or password" : "Wrong email or password";
      $_SESSION["login_error"] = $error;
    }
  }

  private function is_password_incorrect(string $password, string $hashedPWD):bool {
    if(!password_verify($password, $hashedPWD)) {
      return true;
    } else {
      return false;
    }
  }

  private function check_if_username() {
    if (!filter_var($this->username_or_email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  private function sanitize_input(string $data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}