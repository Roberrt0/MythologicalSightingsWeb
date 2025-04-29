<?php
echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <div class="row align-items-center">
          <div class="col-auto">
            <img src="Assets/cameraWhite.png" alt="Bootstrap" width="50" height="45">
          </div>
          <div class="col DG-font">
            <div class="fs-6"><b>Mythological</b></div>
            <div class="fs-6"><b>Sightings</b></div>
          </div>
        </div>
      </a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="monthSighting.php">Sighting of the month</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Popular sightings
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" aria-current="page" href="duendes.php">Duendes</a></li>
              <li><a class="dropdown-item" href="witches.php">Witches</a></li>
              <li><a class="dropdown-item" href="gokus.php">Goku</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled" href="#">???</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="communitySightings.php">Community\'s sightings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Report a sighting</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
';
?>
