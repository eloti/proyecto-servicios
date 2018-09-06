<?php

  //var_dump($_GET);
  require 'classes/DB.php';
  require 'classes/MySQL_DB.php';
  require 'classes/Modelo.php';
  require 'classes/Producto.php';

  $db = new MySQL_DB;
  $producto = $db->find('productos', $_GET['id']);
  $categoria = $db->find('categories', $producto->id_categoria);

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
        <div class="card">
             <div class="card-body">
               <h2 class="card-title"><?=$producto->nombre_producto?></h2>
               <p class="card-text">Categoría: <?=$categoria->nombre_cat?></p>
               <p class="card-text">Trabajos: <?=$producto->descripcion_producto?></p>
               <p class="card-text">Provincia:
               <?php
                 $provincia = $db->find('provinces', $producto->id_provincia);
                 echo $provincia->provincia;?></p>
              <p class="card-text">Teléfono: <?=$producto->Tel_contacto?></p>
             </div>
             <div class="card-body">
               <a href="modificarconobjetos.php?id=<?=$producto->id?>">Modificar</a></td>
               <a href="eliminarconobjetos.php?id=<?=$producto->id?>">Eliminar</a></td>
               <a href="verproductosconobjetos.php?id=6">Volver a vista general</a>
             </div>
           </div>
     </div>


   </body>
 </html>
