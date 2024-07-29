// Validar los formularios de productos y categorías

$(document).ready(function () {
  // Validar el formulario de categorías
  $('form[action="#"]').on("submit", function (event) {
    const categoriaId = $("#categoria-id").val().trim();
    const categoriaNombre = $("#categoria-nombre").val().trim();
    let errores = [];

    if (categoriaId === "") {
      errores.push("ID de la Categoría");
    }
    if (categoriaNombre === "") {
      errores.push("Nombre de la Categoría");
    }

    if (errores.length > 0) {
      event.preventDefault();
      alert(
        "Los siguientes campos no pueden estar vacíos o contener solo espacios en blanco: " +
          errores.join(", ")
      );
    }
  });

  // Validar el formulario de productos
  $('form[action=""]').on("submit", function (event) {
    const productoId = $("#producto-id").val().trim();
    const productoNombre = $("#producto-nombre").val().trim();
    const productoDescripcion = $("#producto-descripcion").val().trim();
    const productoPrecio = $("#producto-precio").val().trim();
    const productoCategoria = $("#producto-categoria").val().trim();
    let errores = [];

    if (productoId === "") {
      errores.push("ID del Producto");
    }
    if (productoNombre === "") {
      errores.push("Nombre del Producto");
    }
    if (productoDescripcion === "") {
      errores.push("Descripción del Producto");
    }
    if (productoPrecio === "") {
      errores.push("Precio del Producto");
    }
    if (productoCategoria === "") {
      errores.push("Categoría del Producto");
    }

    if (errores.length > 0) {
      event.preventDefault();
      alert(
        "Los siguientes campos no pueden estar vacíos o contener solo espacios en blanco: " +
          errores.join(", ")
      );
    }
  });
});
