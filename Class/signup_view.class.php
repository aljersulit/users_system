<?php

declare(strict_types=1);

class signupView {
  public function username_error() {
    if (isset($_SESSION["username_error"])) {
      $error = $_SESSION["username_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["username_taken"])) {
      $error = $_SESSION["username_taken"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["username_error"], $_SESSION["username_taken"]);
  }

  public function password_error() {
    if (isset($_SESSION["password_error"])) {
      $error = $_SESSION["password_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["password_mismatch"])) {
      $error = $_SESSION["password_mismatch"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["password_error"], $_SESSION["password_mismatch"]);
  }

  public function email_error() {
    if (isset($_SESSION["email_error"])) {
      $error = $_SESSION["email_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["email_taken"])) {
      $error = $_SESSION["email_taken"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["email_error"], $_SESSION["email_taken"]);
  }

  public function keep_username() {
    if (isset($_SESSION["username"]) && (!isset($_SESSION["username_error"]) && !isset($_SESSION["username_taken"]))) {
      $value = $_SESSION["username"];
      echo $value;

    }
    unset($_SESSION["username"]);
  }

  public function keep_email() {
    if (isset($_SESSION["email"]) && (!isset($_SESSION["email_error"]) && !isset($_SESSION["email_taken"]))) {
      $value = $_SESSION["email"];
      echo $value;
      
    }
    unset($_SESSION["email"]);
  }

  public function missing_input() {
    if (isset($_SESSION["missing_input"])) {

    }
  }
}