<?php
// Así es haces un comentario de línea
/* Este es un comentario de bloque */


// Esto imprime el mensaje en la consola
echo "Hello PHP \n";

// Variable
$my_string = "Esto es una cadena de texto";
// Para concatenar usa el punto ( . )
echo $my_string . "\n";
// Obtener el tipo de una variable
echo gettype($my_string) . "\n";

$my_string = 6; // Tipado dinámico
echo $my_string . "\n";
echo gettype($my_string) . "\n";