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
    <?php include 'header.php';?>

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
                <img
                  src="sightingImages/gokuSighting1.jpg"
                  class="d-block w-100"
                  alt="failed to load"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="sightingImages/gokuSighting2.jpg"
                  class="d-block w-100"
                  alt="failed to load"
                  height="500px"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="sightingImages/gokuSighting3.jpg"
                  class="d-block w-100"
                  alt="failed to load"
                />
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
            <h2>More about Goku</h2>
            <p>
              In the rich tapestry of mythical lore, there exists a curious and
              singular being known as Goku. Described in tales passed down
              through generations, Goku is portrayed as a remarkable creature
              endowed with unparalleled strength and agility. With his
              distinctive spiky hair and attire reminiscent of a bygone era,
              Goku roams the realms in search of legendary challenges and
              adversaries.
            </p>
            <p>
              Stories abound of his exploits, from battling fearsome beasts to
              mastering ancient martial arts techniques. Despite his fantastical
              nature, the legend of Goku continues to intrigue and amuse,
              serving as a whimsical testament to the limitless imagination
              found within folklore and myth.
            </p>
          </div>
          <div class="text-right">
            <img
              src="Assets/gokuSighting4.png"
              alt="failed to load image"
              width="300px"
            />
          </div>
        </div>
      </div>
    </div>
    
    <?php include 'footer.php';?>
  </body>
</html>
