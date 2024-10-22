<?php

declare(strict_types=1);

class LoginControl extends LoginModel {
  private $username_or_email;

  function __construct(string $username_or_email, string $password)
  {
    $this->username_or_email = $this->sanitize_input($username_or_email);
  }

  // Create login method
  private function login_user() {
    $userData = parent::getUser($this->username_or_email, $this->check_if_username());
    if ($userData) {
      return $userData;
    } else {
      return false;
    }
  }

  private function is_password_correct(string $password, string $hashedPWD):bool {
    if(password_verify($password, $hashedPWD)) {
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