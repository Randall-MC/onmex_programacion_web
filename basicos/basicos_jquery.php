<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basicos JQuery</title>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Formulario para ejercicios con Javascript
  <form action="" method="post">
    <input type="text" id="nombre" class="input-selector-nombre" name="nombre">

    <button id="boton_enviar" class="btn" type="submit">Enviar</button>
    <button id="boton_cancelar" class="btn" type="submit">Cancelar</button>
  </form>
  -->
  <!-- Formulario para ejercicios con JQuery -->
  <form action="" id="formulario_contacto" method="POST">
    <label for="nombre">Nombre</label>
    <br>
    <input type="text" id="nombre" class="input-selector-nombre" required="" name="nombre">
    <br>
    <label for="domicilio">Domicilio</label>
    <br>
    <input type="text" id="domicilio" required="" name="domicilio">
    <br>
    <label>Califica esta página</label>
    <br>
    <input type="radio" name="califica" value="1">1
    <br>
    <input type="radio" name="califica" value="2">2
    <br>
    <input type="radio" name="califica" value="3">3
    <br>
    <button id="boton_enviar" class="btn" type="submit" name="nombre">Enviar</button>
    <button id="boton_cancelar" class="btn" type="button">Cancelar</button>
  </form>

  <div class="container">Hola Mundo</div>
  <div class="container">Bienvenidos</div>

  <script>
    // Utilizando Javascript para manipular el DOM
    // Selector por ID
    document.getElementById("nombre").value = "Selector por ID";
    // Selector por atibuto
    document.getElementsByName("nombre")[0].value = "Selector por atributo";
    // Selector por clase
    document.getElementsByClassName("input-selector-nombre")[0].value = "Selector por Clase";
    // Selector por etiqueta
    document.getElementsByTagName("button")[0].innerHTML = "Send";
    document.getElementsByTagName("button")[1].innerHTML = "Cancel";

    // Evento Ready
    // alert("La página está lista para ser usada por el usuario");
    console.log("La página está lista para ser usada por el usuario");
    // Evento Load
    document.body.onload = function() {
      console.log("Carga completa del cuerpo de la página (body)");
    }
    // Propiedad Location
    document.body.onload = function() {
      console.log("La URL actual es: " + document.location.href);
    }

    // Variables y constantes
    let miVariable = "Esto es una variable";
    const miConstante = "Esto es una constante";

    let primerArreglo = [];
    let segundoArreglo = new Array();

    console.log(typeof(miVariable));
    console.log(typeof(miConstante));
    console.log(typeof(primerArreglo));
    console.log(typeof(segundoArreglo));
    // Agregar elementos a un arreglo
    primerArreglo.push("Este es un elemento");
    primerArreglo.push(2);

    // Primeros pasos con JQuery
    // Selector por ID
    $("#nombre");
    // Selector por atributo
    $("[name='nombre']")[0];
    // Selector por clase
    $(".input-selector-nombre");
    // Función "not()" para excluir
    $("input").not(".input-selector-nombre");
    // Selector de elementos por etiqueta
    $("button")
    // Selector de elemento seleccionado
    $("[name='califica']:checked");

    // Ver el contenido dentro del input "nombre" 
    let nombre = $("#nombre").val();
    console.log(nombre);
    // Si le pasamos un parámetro a la función "val()", el input mostrará dicho valor
    nombre = $("#nombre").val("Cambiando el valor con la función val");

    // Manipular el contenido HTML dentro de las etiquetas con la función "html()"   
    console.log($("#boton_enviar").html());
    // Cambiar el contenido entre las etiquetas 
    $("#boton_enviar").html("Función html()");
    // Cambia el contenido para todos los elementos con la clase ".container"
    $(".container").html("Nuevo contenido del div");
    // Cambiar el contenido del primer elemento
    $(".container").first().html("Nuevo contenido del primer div");
    // Cambiar el contenido del segundo elemento
    $(".container").last().html("Nuevo contenido del último div");
    // Cambiar el contenido de un elemento específico
    $(".container").eq(0).html("Nuevo contenido del div en el índice 0");
  </script>
</body>

</html>