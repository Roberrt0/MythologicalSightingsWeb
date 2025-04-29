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
      style="
        background-image: url(Assets/SightingsBackground.jpg);
        background-size: cover;
      "
    >
      <div
        class="d-flex align-items-center justify-content-center"
        style="height: 600px"
      >
        <div
          class="container text-light d-flex align-items-center justify-content-center"
          style="max-width: 900px"
        >
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <video src="littleMAN.mp4" controls></video>
              </div>
              <div class="carousel-item">
                <video src="tallDUENDE.mp4" width="600px" controls></video>
                <div class="carousel-caption d-none d-md-block">
                  <h5>AUDIO WARNING! (loud)</h5>
                </div>
              </div>
              <div class="carousel-item">
                <video
                  src="duendeREAL.mp4"
                  width="500px"
                  height="500px"
                  controls
                ></video>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <div
        class="d-flex align-items-center justify-content-center"
        style="background-color: #0000008b"
      >
        <div
          class="container text-light d-flex"
          style="max-width: 1000px; padding-top: 10px; padding-bottom: 10px"
        >
          <div class="flex-grow-1">
            <h2>More about duendes</h2>
            <p>
              Duendes, originating from Hispanic folklore, are mythical
              creatures with a rich tradition in the cultural fabric of Spain,
              Portugal, and Latin America. These diminutive beings, often
              portrayed as small humanoid figures, dwell in natural landscapes
              like forests and caves. With their mischievous nature and
              supernatural abilities, duendes are known for playing pranks on
              humans, such as hiding belongings or leading travelers astray.
            </p>
            <p>
              One of the most popular duendes is the "duende de zaragoza" In
              1930s Spain, the Palazón family's kitchen stove became the center
              of a mysterious phenomenon as eerie voices, believed by some to be
              a duende, captured the attention of neighbors, authorities, and
              international press.
            </p>
          </div>
          <div class="text-right">
            <img
              src="Assets/zaragozaDUENDE.jpg"
              alt="failed to load image"
              width="300px"
            />
          </div>
        </div>
      </div>
    </div>


    <?php include_once 'footer.php';?>
  </body>
</html>
