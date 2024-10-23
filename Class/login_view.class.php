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

  public function hide_login_form()
  {
    if (isset($_SESSION["user_logged_in"])) {
      echo "hidden";
    }
  }

  public function logout_user()
  {
    if (isset($_SESSION["user_logged_in"])) {
      $logout_btn = '<form action="includes/logout.inc.php" method="POST" class="user">
        <h1>' . $_SESSION["user_logged_in"]["username"] . '</h1>
        <button type="submit">Logout</button>
      </form>';
      echo $logout_btn;
    }
  }
}
