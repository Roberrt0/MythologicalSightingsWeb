<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evidencia1</title>
    <style>
      @font-face {
        font-family: "DG";
        src: url("Assets/Doctor\ Glitch.otf") format("truetype");
      }
      @font-face {
        font-family: "CC";
        src: url("Assets/Cracked\ Code.ttf") format("truetype");
      }
      .DG-font {
        font-family: "DG", Verdana, Tahoma;
      }
      .CC-font {
        font-family: "CC", Verdana, Tahoma;
      }
      .home-start {
        max-height: 250px;
        background-image: url("Assets/spookyWide.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
      }
      .home {
        background-image: url("Assets/darkForestdark.jpg");
        background-size: 150%;
      }
      .home-content {
        padding-bottom: 40px;
        padding-left: 10px;
      }
      .home-content img {
        margin-right: 5px;
        max-height: 50%;
        max-width: 45%;
      }
      .band {
        min-height: 20px;
        background-image: url("Assets/treeTexture.jpg");
      }
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        background-image: url("Assets/darkForestdark.jpg");
       
      }

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.148);
    border-radius: 5px;
    backdrop-filter: blur(10px);
}

.title {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.input-text {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: rgba(0, 0, 0, 0.27);
    border-radius: 5px;
}

.btn-submit {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-submit:hover {
    background-color: #0056b3;
}

* {
    color: white;
}

.blackText {
  color: black;
}

    .transparentBlack {
      background-color: rgba(0, 0, 0, 0.2);
    }

    </style>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <?php include 'header.php';?>

    <div class="container mt-5">
    <h2>Formulario de Avistamiento (porfavor no ingrese comillas)</h2>
    <form action="uploadFun.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
      </div>
      <div class="form-group">
        <label for="nombre_entidad">Nombre de la Entidad:</label>
        <input type="text" class="form-control" id="nombre_entidad" name="nombre_entidad">
      </div>
      <div class="form-group">
        <label for="url_imagen">URL de la Imagen:</label>
        <input type="text" class="form-control" id="url_imagen" name="url_imagen" required>
      </div>
      <button type="submit" class="btn btn-primary">Guardar Avistamiento</button>
    </form>
  </div>

  <!-- Lista de avistamientos con botones de borrar -->
  <h2 class="mt-5 text-white">Lista de Avistamientos</h2>
    <ul class="list-group avistamientos">
      <?php
      $host = "localhost:3307";
      $user = "root";
      $password = "your_password";
      $dbname = "evidencia3";
      
      //conexion
      $conn = new mysqli($host, $user, $password, $dbname);

      // Consulta para obtener los avistamientos
      $sql = "SELECT id, nombre_entidad FROM sightings";
      $result = $conn->query($sql);
      // Mostrar avistamientos y botones de borrar
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<li class="list-group-item">';
              echo '<button class="btn btn-danger btn-sm float-right" onclick="borrarAvistamiento(' . $row["id"] . ')">Borrar</button>';
              echo '<span class="blackText">ID: ' . $row["id"] . ', Nombre: ' . $row["nombre_entidad"] . '</span>';
              echo '</li>';
          }
      } else {
          echo '<li class="list-group-item">No hay avistamientos registrados</li>';
      }
      ?>
    </ul>
  </div>  


    <?php include 'footer.php';?>

    <script>
    function borrarAvistamiento(id) {
      if (confirm("¿Estás seguro de que quieres borrar este avistamiento?")) {
        // Enviar solicitud de borrado a través de AJAX
        $.post('borrar_avistamiento.php', { id: id })
          .done(function(data) {
            alert(data); // Mostrar mensaje de éxito o error
            // Recargar la página para actualizar la lista de avistamientos
            location.reload();
          })
          .fail(function() {
            alert("Error al intentar borrar el avistamiento.");
          });
      }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
</html>
