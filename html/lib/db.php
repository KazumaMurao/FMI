<?php

class myDB {
  private $conn;
  private $dbhost = "127.0.0.1";
  private $dbuser = "";
  private $dbname = "";
  private $dbcharset = "utf-8";

  /**
   * constructor
   */
  public function __construct() {
    $dbpass = "";
    $this->conn = new mysqli($this->dbhost, $this->dbuser, $dbpass, $this->dbname);
    if (mysqli_connect_error()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
    }
    $this->conn->set_charset($this->dbcharset);
  }

  /**
   * destructor
   *
   */
  public function _destruct() {
    $this->conn->close();
  }

  /**
   */
  function myFunction($id, $version) {
    $table = "";
    $query = "INSERT INTO $table (id, version) VALUES (?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ss", $id, $version);
    $res = $stmt->execute();
    $stmt->close();
    return $res;
  }

}

