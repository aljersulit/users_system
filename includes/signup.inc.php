<?php

ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $checkPassword = $_POST["checkPassword"];
  $email = $_POST["email"];


  require_once "../Class/Dbhandler.class.php";
  require_once "../Class/signup_model.class.php";
  require_once "../Class/signup_control.class.php";
  
  require_once "config_session.inc.php";
  
  $user = new SignupControl($username, $password, $checkPassword, $email);
  $user->signup();

  header("Location: ../signup/index.php?signup_success=true");
  exit();
} else {
  header("Location: ../signup/index.php");
  die();
}

