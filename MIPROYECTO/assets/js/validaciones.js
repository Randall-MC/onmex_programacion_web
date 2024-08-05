$(document).ready(function () {
  $("form").on("submit", function (event) {
    let isValid = true;
    let invalidFields = [];

    $(this)
      .find("input, textarea, select")
      .each(function () {
        if ($.trim($(this).val()) === "") {
          isValid = false;
          invalidFields.push($(this).attr("name"));
        }
      });

    if (!isValid) {
      event.preventDefault();
      let message =
        "Los siguientes campos son obligatorios y no pueden estar vacíos:\n" +
        invalidFields.join(", ") +
        "\n\nRandall M C";
      showAlert(message);
    }
  });

  $("#custom-alert-close").on("click", function () {
    $("#custom-alert").hide();
    $("#overlay").hide(); // Ocultar el fondo de superposición
  });
});

function showAlert(message) {
  const formattedMessage = message.replace(/\n/g, "<br>");
  $("#custom-alert-message").html(formattedMessage); // Usar .html() para interpretar etiquetas HTML
  $("#custom-alert").show();
  $("#overlay").show(); // Mostrar el fondo de superposición
}
