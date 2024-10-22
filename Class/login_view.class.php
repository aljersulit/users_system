<?php

declare(strict_types=1);

class LoginView {
  public function view_login_error() {
    if (isset($_SESSION["login_error"])) {
      $error = $_SESSION["login_error"];
      echo "<p class='error'>$error</p>";
    }
    unset($_SESSION["login_error"]);
  }
}