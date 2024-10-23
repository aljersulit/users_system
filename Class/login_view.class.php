<?php

declare(strict_types=1);

class LoginView
{
  public function view_login_error()
  {
    if (isset($_SESSION["login_error"])) {
      $error = $_SESSION["login_error"];
      echo "<p class='error'>$error</p>";
    }
    unset($_SESSION["login_error"]);
  }

  public function show_login_form()
  {
    if (!isset($_SESSION["user_logged_in"])) {
      $login_form = '<section class="logged_in"> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span> <span class="box"></span>

        <div class="container">

          <div class="content">

            <h2>Sign In</h2>

            <?php $loginView->view_login_error(); ?>

            <form class="form" action="./includes/login.inc.php" method="POST">

              <div class="inputBox">

                <input type="text" name="username_or_email"> <i>Username or Email</i>

              </div>

              <div class="inputBox">

                <input type="password" name="password" > <i>Password</i>

              </div>

              <div class="links"> <a href="./signup">Don\'t have an account?</a>

              </div>

              <div class="inputBox">

                <input type="submit" value="Login">

              </div>

            </form>

          </div>

        </div>

      </section>';
      echo $login_form;
    }
  }
}
