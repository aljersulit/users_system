<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
  'lifetime' => 1800,
  'domain' => 'localhost',
  'path' => '/',
  'secure' => true,
  'httponly' => true
]);

session_start();

if(isset($_SESSION["user_logged_in"])) {
  $interval = 60 * 30;
  if (time() - $_SESSION["last_regeneration"] >= $interval) {
    $newSessionID = session_create_id() . "_" . $_SESSION["user_logged_in"]["user_id"];
    session_id($newSessionID);
    $_SESSION["last_regeneration"] = time();
  }
} else if (!isset($_SESSION["last_regeneration"])) {
  $_SESSION["last_regeneration"] = time();
} else {
  $interval = 60 * 30;
  if (time() - $_SESSION["last_regeneration"] >= $interval) {
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
  }
}