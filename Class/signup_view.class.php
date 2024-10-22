<?php

declare(strict_types=1);

class signupView {
  public function username_error() {
    if (isset($_SESSION["signup_errors"]["username_error"])) {
      $error = $_SESSION["signup_errors"]["username_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["signup_errors"]["username_taken"])) {
      $error = $_SESSION["signup_errors"]["username_taken"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["signup_errors"]["username_error"], $_SESSION["signup_errors"]["username_taken"]);
  }

  public function password_error() {
    if (isset($_SESSION["signup_errors"]["password_error"])) {
      $error = $_SESSION["signup_errors"]["password_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["signup_errors"]["password_mismatch"])) {
      $error = $_SESSION["signup_errors"]["password_mismatch"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["signup_errors"]["password_error"], $_SESSION["signup_errors"]["password_mismatch"]);
  }

  public function email_error() {
    if (isset($_SESSION["signup_errors"]["email_error"])) {
      $error = $_SESSION["signup_errors"]["email_error"];
      echo "<span class='error'>$error</span>";
    } else if (isset($_SESSION["signup_errors"]["email_taken"])) {
      $error = $_SESSION["signup_errors"]["email_taken"];
      echo "<span class='error'>$error</span>";
    }

    unset($_SESSION["signup_errors"]["email_error"], $_SESSION["signup_errors"]["email_taken"]);
  }

  public function missing_input() {
    if (isset($_SESSION["signup_errors"]["missing_input"])) {
      $value = $_SESSION["signup_errors"]["missing_input"];
      echo "<p class='error'>$value</p>";
    }
    unset($_SESSION["signup_errors"]['missing_input']);
  }

  public function keep_username() {
    if (isset($_SESSION["username"]) && (!isset($_SESSION["signup_errors"]["username_error"]) && !isset($_SESSION["signup_errors"]["username_taken"]))) {
      $value = $_SESSION["username"];
      echo $value;

    }
    unset($_SESSION["username"]);
  }

  public function keep_email() {
    if (isset($_SESSION["email"]) && (!isset($_SESSION["signup_errors"]["email_error"]) && !isset($_SESSION["signup_errors"]["email_taken"]))) {
      $value = $_SESSION["email"];
      echo $value;
      
    }
    unset($_SESSION["email"]);
  }

}