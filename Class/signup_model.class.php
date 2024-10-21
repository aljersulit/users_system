<?php

declare(strict_types=1);

class SignupModel extends Dbhandler {

  protected function createUser(string $username, string $password, string $email) {
    $dbconn = parent::connect();

    $options = [
      'cost' => 12
    ];
    $hashedPWD = password_hash($password, PASSWORD_BCRYPT, $options);

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
    $stmt = $dbconn->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPWD);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

  }

  protected function checkUsername(string $username):bool|array {
    $dbconn = parent::connect();

    $query = "SELECT username FROM users WHERE username = :username";
    $stmt = $dbconn->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  protected function checkEmail(string $email):bool|array {
    $dbconn = parent::connect();

    $query = "SELECT email FROM users WHERE email = :email";
    $stmt = $dbconn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
}