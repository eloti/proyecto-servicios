<?php

  //var_dump($_GET);
  require 'classes/DB.php';
  require 'classes/MySQL_DB.php';
  require 'classes/Modelo.php';
  require 'classes/Producto.php';
  require 'classes/Categoria.php';

  var_dump($_GET);

  $model = new Producto($_GET);
  $model->save();

  header('location:detallesconobjetos.php?id='.$_GET['id']);



  ?>
