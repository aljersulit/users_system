<?php

ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username_or_email = $_POST["username"];
  $password = $_POST["password"];

  require_once "../Class/Dbhandler.class.php";
  require_once "../Class/login_model.class.php";
  require_once "../Class/login_control.class.php";

  require_once "config_session.inc.php";

  header("Location: ../index.php");
  exit();
} else {
  header("Location: ../index.php");
  die();
}
