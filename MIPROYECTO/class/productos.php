<?php
/* @autor Randall Marquez */

require_once 'database.php';

class Producto
{
  public $id;
  public $nombre;
  public $descripcion;
  public $precio;
  public $categoria_id;
  public $imagen_url;

  public function __construct($id = null, $nombre = null, $descripcion = null, $precio = null, $categoria_id = null, $imagen_url = null)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->categoria_id = $categoria_id;
    $this->imagen_url = $imagen_url;
  }

  public function guardar()
  {
    $db = new Database();
    $conn = $db->getConnection();

    if ($this->id) {
      $query = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio, categoria_id = :categoria_id, imagen_url = :imagen_url WHERE id = :id";
      $params = [
        ':nombre' => $this->nombre,
        ':descripcion' => $this->descripcion,
        ':precio' => $this->precio,
        ':categoria_id' => $this->categoria_id,
        ':id' => $this->id,
        ':imagen_url' => $this->imagen_url
      ];
      return $db->update($query, $params);
    } else {
      $query = "INSERT INTO productos (nombre, descripcion, precio, categoria_id, imagen_url) VALUES (:nombre, :descripcion, :precio, :categoria_id, :imagen_url)";
      $params = [
        ':nombre' => $this->nombre,
        ':descripcion' => $this->descripcion,
        ':precio' => $this->precio,
        ':categoria_id' => $this->categoria_id,
        ':imagen_url' => $this->imagen_url
      ];
      return $db->insert($query, $params);
    }
  }

  public function eliminar()
  {
    $db = new Database();
    $conn = $db->getConnection();

    $query = "DELETE FROM productos WHERE id = :id";
    $params = [':id' => $this->id];
    return $db->delete($query, $params);
  }
}
