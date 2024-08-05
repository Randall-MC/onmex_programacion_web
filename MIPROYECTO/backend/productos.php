<?php
/* @autor Randall Marquez */
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $producto = new Producto(
    null,
    $_POST['producto-nombre'],
    $_POST['producto-descripcion'],
    $_POST['producto-precio'],
    $_POST['producto-categoria'],
    $_POST['producto-imagen-url']
  );

  if ($producto->guardar()) {
    echo "Producto guardado correctamente.";
  } else {
    echo "Error al guardar el producto.";
  }
}
