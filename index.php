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
  <?php
  $loginView->logout_user();
  ?>

  <section class=<?php $loginView->hide_login_form(); ?>> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span>

    <div class="container">

      <div class="content">

        <h2>Sign In</h2>

        <?php $loginView->view_login_error(); ?>

        <form class="form" action="./includes/login.inc.php" method="POST">

          <div class="inputBox">

            <input type="text" name="username_or_email"> <i>Username or Email</i>

          </div>

          <div class="inputBox">

            <input type="password" name="password"> <i>Password</i>

          </div>

          <div class="links"> <a href="./signup">Don't have an account?</a>

          </div>

          <div class="inputBox">

            <input type="submit" value="Login">

          </div>

        </form>

      </div>

    </div>

  </section>

</body>

</html>