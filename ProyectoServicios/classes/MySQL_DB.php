<?php

class MySQL_DB extends DB {

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

  public function insert($datos, $modelo) {
    $columnas = '';
    $values = '';

    foreach ($datos as $key => $value) {
    if (in_array($key, $modelo->columns)) {
        $columnas .= $key . ',';
        $values .= '"' . $value . '",';
      }
    }

    $columnas = trim($columnas, ',');
    $values = trim($values, ',');
    $sql = 'insert into '.$modelo->table.' ('.$columnas.') values ('.$values.')';

    try {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
    } catch(Exception $e) {
      $e->getMessage();
    }
  }

    public function update($datos, $modelo) {
      $set = '';

      foreach ($datos as $key => $value) {
        $set .= $key . '="' . $value . '",';
      }

      $set = trim($set, ',');
      $sql = 'UPDATE '.$modelo->table.' set ' . $set . ' WHERE id = ' . $modelo->getAttr('id');

      try {
        $stmt = $this->conn->prepare($sql);
          $stmt->execute();
      } catch(Exception $e) {
        $e->getMessage();
      }
    }

    public function find($table, $id) {
      //global $db; lo saco porque lo sacamos en insert y update
      $sql = 'SELECT * FROM '. $table .' WHERE id = :id'; //fetch hacer una función all para buscar todos que no tenga el where
      $stmt = $this->conn->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
//esta la hago yo:
    public function findAll($table) {
      $sql = 'SELECT * FROM '. $table;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
//esta la hago yo:
    public function deleteRegister($table, $id) {
      $sql = 'DELETE FROM '. $table .' WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->execute();
    }

}
