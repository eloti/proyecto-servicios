<?php

  //var_dump($_GET);
  require 'classes/DB.php';
  require 'classes/MySQL_DB.php';
  require 'classes/Modelo.php';
  require 'classes/Producto.php';
  require 'classes/Categoria.php';

  $db = new MySQL_DB;
  $db->deleteRegister('productos', $_GET['id']);
  header('location:verproductosconobjetos.php?id=6')

  ?>
