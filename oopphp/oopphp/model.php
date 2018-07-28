<?php

class DbConnect {
  private $servername;
  private $username;
  private $password;
  private $dbname;

  protected $conn;

  protected function connect() {
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "student_db";

      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $this->conn;
  }



}

?>
