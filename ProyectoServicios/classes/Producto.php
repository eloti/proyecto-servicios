<?php

class Producto extends Modelo
{
  public $table = 'productos';
  public $columns = ['id', 'id_categoria', 'nombre_producto', 'descripcion_producto', 'id_provincia', 'Tel_contacto'];
}
