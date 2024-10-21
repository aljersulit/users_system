<?php
ini_set("display_errors", 1);
require_once "../includes/config_session.inc.php";
require_once "../Class/signup_view.class.php";
$signup_view = new signupView();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <link rel="stylesheet" href="../style.css">

</head>

<body> <!-- partial:index.partial.html -->

  <section> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span>
    
    <div class="signin">

      <div class="content">

        <h2>Sign up</h2>
        
        <form class="form" action="../includes/signup.inc.php" method="POST">

          <div class="inputBox">

            <input type="text" name="username" value="<?php $signup_view->keep_username(); ?>"> <i>Username</i>

          </div>
          <?php $signup_view->username_error(); ?>

          <div class="inputBox">

            <input type="password" name="password"> <i>Password</i>
            
          </div>
          <?php if (isset($_SESSION["password_error"])) $signup_view->password_error() ?>

          <div class="inputBox">

            <input type="password" name="checkPassword"> <i>Confirm Password</i>

          </div>
          <?php if (isset($_SESSION["password_mismatch"])) $signup_view->password_error() ?>

          <div class="inputBox">

            <input type="text" name="email" value="<?php $signup_view->keep_email(); ?>"> <i>Email</i>

          </div>
          <?php $signup_view->email_error(); ?>

          <div class="links"><a href="../index.php">Already have an account?</a>

          </div>

          <div class="inputBox">

            <input type="submit" value="Sign Up">

          </div>

        </form>

      </div>

    </div>

  </section> <!-- partial -->
</body>

</html>