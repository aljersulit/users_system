<?php

class Dbhandler {
  private $host = "localhost";
  private $dbname = "phpUsersSystem";
  private $dbUsername = "root";
  private $dbPassword = "";

  protected function connect() {
    
    try {
      $connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbUsername, $this->dbPassword);
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connection;
      
    } catch (PDOException $e) {
      die("Connection Error: $e");
    }
  }
}