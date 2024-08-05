<?php

abstract final class personas
{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $direccion;

  function __construct($nombre, $apellido, $email, $direccion)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->direccion = $direccion;
  }

  protected function mostrar()
  {
    echo "nombre: " . $this->nombre . "<br>";
    echo "apellido: " . $this->apellido . "<br>";
    echo "email: " . $this->email . "<br>";
    echo "direccion: " . $this->direccion . "<br>";
  }
}

class alumnos extends personas
{
  public $legajo;
  function __construct($nombre, $apellido, $email, $direccion, $legajo)
  {
    parent::__construct($nombre, $apellido, $email, $direccion);
    $this->legajo = $legajo;
  }

  function mostrar()
  {
    parent::mostrar();
    echo "legajo: " . $this->legajo;
  }
}

$alumno = new alumnos("Pedro", "Picapiedras", "pedro@picapiedras.com", "Rocallosas 50", "21211/5");
$alumno->mostrar();
