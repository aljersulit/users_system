<?php

declare(strict_types=1);

class LoginControl {
  private $username_or_email;
  private $password;

  function __construct(string $username_or_email, string $password)
  {
    $this->username_or_email = $this->sanitize_input($username_or_email);
    $this->password = $this->sanitize_input($password);
  }

  // Create login method

  private function check_if_username() {
    if (!filter_var($this->username_or_email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
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