<?php
  require 'classes/DB.php';
  require 'classes/MySQL_DB.php';
  require 'classes/Modelo.php';
  require 'classes/Producto.php';
  //var_dump($_GET);
  //echo "<br>";
  //echo $_GET['id'];

//if (!isset($_GET['categoria']) || $_GET['categoria'] == "6") {// o isset ponerlo antes

  //Trae todos los registros de productos con su correspondiente nombre de categoría y provincia
  //$traeProductos = $conn->prepare('SELECT productos.nombre_producto, productos.descripcion_producto, categories.nombre_cat AS showcategoria, provinces.provincia AS showprovincia FROM productos LEFT JOIN categories ON productos.id_categoria=categories.id_categories LEFT JOIN provinces ON productos.id_provincia=provinces.id_provincia');

  $db = new MySQL_DB;
  $productos = $db->findAll('productos');
  $categorias = $db->findAll('categories');
  $provincias = $db->findAll('provinces');
  //echo "<pre>";
  //var_dump($productos);
  //echo '<br>';
  //var_dump($categorias);


//} else {

  //Trae solo los registros de la categoría especificada en el $_GET
  //$traeProductos = $conn->prepare('SELECT productos.nombre_producto, productos.descripcion_producto, categories.nombre_cat AS showcategoria, provinces.provincia AS showprovincia FROM productos LEFT JOIN categories ON productos.id_categoria=categories.id_categories LEFT JOIN provinces ON productos.id_provincia=provinces.id_provincia WHERE id_categoria = :id_categoria');
  //$traeProductos->bindParam(':id_categoria', $_GET['categoria']);

  //$db = new MySQL_DB;
  //$productos = $db->find('productos', $_GET['categoria']);
  //$categoria = $db->find('categories', $_GET['categoria']);
    //var_dump($productos);
    //echo '<br>';
    //var_dump($categoria);
    //exit;

//};

  //$traeProductos->execute();
  //$Productos = $traeProductos->fetchAll(PDO::FETCH_ASSOC);//ponerlo por fuera

  //para buscar las categorías y para que el usario elija la que quiere ver:
  //$buscarCategorias = $conn->prepare('SELECT * FROM categories ORDER BY id_categories');
  //$buscarCategorias->execute();
  //$categorias = $buscarCategorias->fetchAll(PDO::FETCH_ASSOC);

//para poder elegir categoría "Todas", agrego una categoría id=6
  //$categoriasTodas = ["id_categories"=>"6", "nombre_cat"=>"Todos"];
  //array_push($categorias, $categoriasTodas);
  //echo "<pre>";
  //var_dump($categorias);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once 'header.html';?>

    <div class="container categoria">
      <form class="form-horizontal col-sm-9" action="verproductosconobjetos.php" method="get">
        <div class="form-group servicios col-sm-8">
          <label class="control-label col-sm-6" for="id"><b>Elija la categoría a visualizar:</b></label>
            <div class="col-sm-6 categoria">
              <select class="elegircategoria" name="id">
                <option value="">Elegir</option><!--para que muestre siempre "Elegir" por default-->
                <?php
                  foreach ($categorias as $unaCategoria): ?>
                  <option value="<?=$unaCategoria->id?>"><?=$unaCategoria->nombre_cat?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <input class="col-sm-4 filtro" type="submit" value="Aplicar filtro">
      </form>
        <a class="col-sm-3 botonagregar" href="agregarconobjetos.php">Cargar proveedor nuevo</a>
    </div>

    <div class="container mostrando">
      <?php
      $db = new MySQL_DB;
      $categoriaABuscar = $db->find('categories', $_GET['id']);
      //var_dump($categoria);
      //exit;
      ?><h1>Mostrando proveedores de la categoría: <b>
        <?=$categoriaABuscar->nombre_cat?></b></h1>
    </div>

    <div class="card-rows">
      <?php
      foreach ($productos as $unProducto): {
        if($categoriaABuscar->id == $unProducto->id_categoria) {?>
          <div class="card-vertodos">
            <div class="card-body">
              <h2 class="card-title"><?=$unProducto->nombre_producto?></h2>
              <p class="card-text">Categoría:
                <?php
                  $categoria = $db->find('categories', $unProducto->id_categoria);
                  echo $categoria->nombre_cat;?></p>
              <p class="card-text">Trabajos: <?=$unProducto->descripcion_producto?></p>
              <p class="card-text">Provincia:
              <?php
                $provincia = $db->find('provinces', $unProducto->id_provincia);
                echo $provincia->provincia;?></p>
            </div>
            <div class="card-body">
              <a class="col-sm-3 botonaccion" href="detallesconobjetos.php?id=<?=$unProducto->id?>">Detalles</a>
              <a class="col-sm-3 botonaccion" href="modificarconobjetos.php?id=<?=$unProducto->id?>">Modificar</a>
              <a class="col-sm-3 botonaccion" href="eliminarconobjetos.php?id=<?=$unProducto->id?>">Eliminar</a>
            </div>
          </div>
        <?php
      } elseif ($categoriaABuscar->id == 6) {?>
          <div class="card-vertodos">
            <div class="card-body">
              <h2 class="card-title"><?=$unProducto->nombre_producto?></h2>
              <p class="card-text">Categoría:
                <?php
                  $categoria = $db->find('categories', $unProducto->id_categoria);
                  echo $categoria->nombre_cat;?></p>
              <p class="card-text">Trabajos: <?=$unProducto->descripcion_producto?></p>
              <p class="card-text">Provincia:
                <?php
                  $provincia = $db->find('provinces', $unProducto->id_provincia);
                  echo $provincia->provincia;?></p>
            </div>
            <div class="card-body">
              <a class="col-sm-3 botonaccion" href="detallesconobjetos.php?id=<?=$unProducto->id?>">Detalles</a>
              <a class="col-sm-3 botonaccion" href="modificarconobjetos.php?id=<?=$unProducto->id?>">Modificar</a>
              <a class="col-sm-3 botonaccion" href="eliminarconobjetos.php?id=<?=$unProducto->id?>">Eliminar</a>
            </div>
          </div>
      <?php
    };
      };
      endforeach;?>
    </div>

    <?php require_once 'footer.html';?>
  </body>
</html>
