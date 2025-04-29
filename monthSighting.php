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
    <?php require_once 'header.php';?>

    <div
      class="d-flex align-items-center justify-content-center vh-100"
      style="background-image: url(Assets/darkSpace.jpg); background-size: cover"
    >
      <div class="container text-light d-flex" style="max-width: 900px">
        <div class="flex-grow-1">
          <h2>RARE DUENDE ENCOUNTER</h2>
          <p>
            We are thrilled to present our latest sighting of the elusive and
            enigmatic creatures known as Duendes. These mystical beings, deeply
            rooted in folklore and legend, have long captured the imaginations
            of people around the world.
          </p>
          <p>
            In this exclusive footage captured by one of our avid explorers, we
            witness a rare encounter with a Duende navigating the labyrinth of
            streets, disappearing into the shadows with an enigmatic allure.
            Watch as the diminutive figure moves with graceful agility,
            seemingly unaffected by the world around it. With its mischievous
            glint and ethereal presence, the Duende captivates our attention and
            leaves us in awe of the mysteries that still abound in our world.
          </p>
        </div>
        <div class="text-right">
          <div id="video-div">
            <video src="duendeSighting1.mp4" controls></video>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'footer.php';?>
  </body>
</html>
