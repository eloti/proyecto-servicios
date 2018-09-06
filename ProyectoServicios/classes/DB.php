<?php

abstract class DB
{
  abstract public function insert($datos, $modelo);
  abstract public function update($datos, $modelo);
  abstract public function find($table, $id);
}
