<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Microactividades</title>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <style>
    .table-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    table tr th {
      border: 1px solid #ccc;
    }

    table tr td {
      border: 1px solid #ccc;
      height: 200px;
      width: 200px;
      text-align: center;
      font-size: 20px;
    }

    .desocupado {
      background: #ccc;
    }

    button {
      background-color: #eee;
      border: none;
      padding: 0.75em 1.5em;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s ease;
      margin-bottom: 10px;
    }

    button:hover {
      background-color: #aaa;
    }
  </style>
</head>

<body>
  <section class="table-container">
    <h1>Clase de Química Orgánica</h1>
    <button>Mostrar</button>
    <table>
      <thead>
        <tr>
          <th>01</th>
          <th>02</th>
          <th>03</th>
          <th>04</th>
          <th>05</th>
          <th>06</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Julio Verne</td>
          <td class="desocupado"></td>
          <td>Stephen King</td>
          <td class="desocupado"></td>
          <td>Julio Iglesias</td>
          <td class="desocupado"></td>
        </tr>
        <tr>
          <td class="desocupado"></td>
          <td>Isabel Allende</td>
          <td class="desocupado"></td>
          <td>Fabiana Cantilo</td>
          <td class="desocupado"></td>
          <td>Vilma Picapiedras</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>Pebbles Picapiedras</td>
          <td class="desocupado"></td>
          <td>Luis Alberto Spinetta</td>
          <td class="desocupado"></td>
          <td>José Perales</td>
          <td class="desocupado"></td>
        </tr>
      </tfoot>
    </table>
  </section>

  <div>

  </div>

  <script>
    // Módulo 2 - Microactividad
    $(".desocupado").click(function() {
      alert("Asiento desocupado");
    });

    $("td").not(".desocupado").click(function() {
      let nombre = $(this).html();
      alert(nombre);
    });

    $("button").click(function() {
      let asientos_ocupados = $(".desocupado").length;
      let asientos_disponibles = $("td").not(".desocupado").length;
      let total_asientos = $("td").length;

      alert(`Asientos ocupados: ${asientos_ocupados}\nAsientos disponibles: ${asientos_disponibles}\nTotal de asientos: ${total_asientos}`);
    });
  </script>
</body>

</html>