<?php

class Dbconn {

  protected $conn;

  public function __construct() {
    try {
      $this->conn = new PDO('mysql:host=localhost;dbname=ecommerce_db', 'root', '');
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
  }
}

$db = new Dbconn();
