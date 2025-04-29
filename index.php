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
      class="d-flex justify-content-md-center align-items-center vh-100 home-start text-light text-center CC-font"
    >
      <div>
        <p>STRANGE AND UNIQUE CREATURES</p>
        <p>CAUGHT LIVE ON CAMERA</p>
      </div>
    </div>

    <div class="band"></div>

    <div class="home">
      <div class="d-flex text-light home-content" style="padding-top: 10px">
        <img src="Assets/DUENDE.jpg" /><img />
        <div>
          <h2>Unknown creatures all over the world</h2>
          <p>
            Welcome to the enigmatic realm of unknown creatures that dwell in
            the shadows of our world, lurking in the depths of forests, prowling
            through desolate landscapes, and even traversing the murky depths of
            our oceans. Across continents and cultures, tales of mysterious
            beings have captivated the imagination of humanity for centuries,
            weaving a rich tapestry of folklore and legend.
          </p>
          <p>
            From the elusive Sasquatch of North America to the mythical
            Chupacabra of Latin America, and from the ancient dragons of Eastern
            mythology to the ethereal spirits of indigenous cultures, the
            diversity of these creatures knows no bounds. Each region boasts its
            own unique array of cryptids, cryptic creatures whose existence
            remains shrouded in mystery, defying scientific explanation and
            challenging our understanding of the natural world.
          </p>
        </div>
      </div>
      <div class="d-flex text-light home-content justify-content-end">
        <div>
          <h2>Prepare your equipment</h2>
          <p>
            Embark on your quest to uncover the truth behind mysterious creature
            sightings with careful preparation and the right tools at your
            disposal. Whether you're a seasoned investigator or a curious
            enthusiast, equipping yourself with the appropriate gear can make
            all the difference in your expedition.
          </p>
          <p>
            First and foremost, ensure you have a reliable camera or camcorder
            capable of capturing high-quality footage in various lighting
            conditions. A clear, detailed photograph or video can provide
            invaluable evidence to corroborate your sightings and lend
            credibility to your investigation.
          </p>
        </div>
        <img src="Assets/hunter.jpg" /><img />
      </div>

      <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem; background-color: #00000077">
          <img src="Assets/footprint.jpg" class="card-img-top" alt="failed to load" />
          <div class="card-body text-light">
            <h5 class="card-title">Giant footprints</h5>
            <p class="card-text">
              Uncover the secrets of creature footprints, revealing insights
              into size, gait, and behavior. These imprints offer tangible clues
              about the creatures that roam our world, from massive predators to
              secretive woodland dwellers.
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem; background-color: #00000077">
          <img
            src="Assets/treeScratch2.JPG"
            class="card-img-top"
            alt="failed to load"
          />
          <div class="card-body text-light">
            <h5 class="card-title">Scratches</h5>
            <p class="card-text">
              Explore the mysterious marks of creature scratches, etched into
              the landscape by unknown beings. These patterns hint at
              territorial behaviors and activities, providing glimpses into the
              lives of elusive creatures.
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem; background-color: #00000077">
          <img src="Assets/forestNest.jpg" class="card-img-top" alt="failed to load" />
          <div class="card-body text-light">
            <h5 class="card-title">Strange nests</h5>
            <p class="card-text">
              Discover the intricacies of creature nests, woven from natural
              materials and hidden in the wilderness. These structures offer
              insights into nesting behaviors and habitat preferences, shedding
              light on the lives of elusive creatures.
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'footer.php';?>
  </body>
</html>
