<?php
/* @autor Randall Marquez */

require_once 'database.php';

class Categoria
{
  public $id;
  public $nombre;

  public function __construct($id = null, $nombre = null)
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }

  public function guardar()
  {
    $db = new Database();
    $conn = $db->getConnection();

    if ($this->id) {
      $query = "UPDATE categorias SET nombre = :nombre WHERE id = :id";
      $params = [
        ':nombre' => $this->nombre,
        ':id' => $this->id
      ];
      return $db->update($query, $params);
    } else {
      $query = "INSERT INTO categorias (nombre) VALUES (:nombre)";
      $params = [':nombre' => $this->nombre];
      return $db->insert($query, $params);
    }
  }

  public function eliminar()
  {
    $db = new Database();
    $conn = $db->getConnection();

    $query = "DELETE FROM categorias WHERE id = :id";
    $params = [':id' => $this->id];
    return $db->delete($query, $params);
  }
}
