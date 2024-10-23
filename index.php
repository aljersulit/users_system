<?php
ini_set("display_errors", 1);
require_once "Class/login_view.class.php";
require_once "includes/config_session.inc.php";
$loginView = new LoginView();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Users System</title>

  <link rel="stylesheet" href="./style.css">

</head>

<body> 

  <?php $loginView->show_login_form(); ?>

</body>

</html>