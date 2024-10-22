<?php

declare(strict_types=1);

class LoginModel extends Dbhandler {
  protected function getUser(string $username_or_email, bool $is_username):array|bool {
    $dbconn = parent::connect();

    if ($is_username) {
      $query = "SELECT * FROM users WHERE username = :username";
      $stmt = $dbconn->prepare($query);
      $stmt->bindParam(":username", $username_or_email);
    } else {
      $query = "SELECT * FROM users WHERE email = :email";
      $stmt = $dbconn->prepare($query);
      $stmt->bindParam(":email", $username_or_email);
    }

    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
}