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
        background-image: url("Assets/darkForestdark.jpg");
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

    <section class="container enemigos"> 
  <div class="row justify-content-center">

    <?php 
    // parametros
    $host = "localhost:3307";
    $user = "root";
    $password = "your_password";
    $dbname = "evidencia3";

    // crear conexion
    $conn = new mysqli($host, $user, $password, $dbname);

    // jalar datos de la base de datos
    $query = "SELECT * FROM sightings";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
      echo '<div class="col-md-4 mb-4">';
      echo '<div class="card" style="background-color: #00000077;">';
      echo '<img src="' . $row['url_imagen'] . '" class="card-img-top" alt="Sighting image or video">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title text-light">' . 'sighting: ',$row['nombre_entidad'] . '</h5>';
      echo '<p class="card-text text-light">' . $row['descripcion'] . '</p>';
      echo '<p class="card-text text-light">Upload date: ' . $row['fecha_subida'] . '</p>';  
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }

    // cerrar conexion
    $conn->close();
    ?> 

  </div> <!-- .row -->
</section>

    
    <?php include 'footer.php';?>
  </body>
</html>
