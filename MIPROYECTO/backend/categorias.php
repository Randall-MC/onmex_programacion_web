<?php
/* @autor Randall Marquez */
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $categoria = new Categoria(
    null,
    $_POST['categoria-nombre']
  );

  if ($categoria->guardar()) {
    echo "Categoría guardada correctamente.";
  } else {
    echo "Error al guardar la categoría.";
  }
}
