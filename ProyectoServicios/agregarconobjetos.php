<?php

  require 'classes/DB.php';
  require 'classes/MySQL_DB.php';
  require 'classes/Modelo.php';
  require 'classes/Producto.php';
  require 'classes/Categoria.php';

 //var_dump($_POST);

 $db = new MySQL_DB;
 $categorias = $db->findAll('categories');
 $provincias = $db->findAll('provinces');

 if (!empty($_POST['nombre_producto']) && !empty($_POST['id_categoria'])) {

  $model = new Producto($_POST);
  $model->save();

  //header('location:verproductosconobjetos.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DetalleProducto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="card-rows">
       <form class="form-horizontal" action="agregarconobjetos.php" method="post">

         <div class="form-group">
           <label class="control-label col-sm-2" for="nombre_producto">Nombre del Proveedor:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-sm-2" for="id_categoria">Categoría:</label>
           <div class="col-sm-10">
             <select class="form-control" name="id_categoria">
               <?php foreach ($categorias as $unaCategoria): ?>
                 <option value="<?=$unaCategoria->id?>"><?=$unaCategoria->nombre_cat?></option>
               <?php endforeach; ?>
             </select>
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-sm-2" for="descripcion_producto">Trabajos:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto">
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-sm-2" for="id_provincia">Provincia:</label>
           <div class="col-sm-10">
             <select class="form-control" name="id_provincia" value="<?=$provincia->provincia?>">
               <?php foreach ($provincias as $unaProvincia): ?>
                 <option value="<?=$unaProvincia->id?>"><?=$unaProvincia->provincia?></option>
               <?php endforeach; ?>
             </select>
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-sm-2" for="Tel_contacto">Teléfono:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="Tel_contacto" name="Tel_contacto">
           </div>
         </div>

       <span>
         <input type="submit" value="Agregar proveedor">
         <a href="verproductosconobjetos.php?id=6">Volver a vista general</a>
       </span>

   </div>
