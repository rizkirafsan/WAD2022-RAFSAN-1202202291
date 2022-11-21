<?php
require "../config/connector.php";
session_start();

$listCar = query('SELECT * FROM showroom_rafsan_table');

$sessionData = $_SESSION;

if (count($listCar) == 0) {
  header("Location: Add-Rafsan.php");
  exit;
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="../assets/styles/index.css">

  <!-- toast -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="Home-Rafsan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ListCar-Rafsan.php">MyCar</a>
            </li>
          </ul>
        </div>

        <div class="add-car">
          <a href="Add-Rafsan.php" class="btn btn-light text-primary">Add Car</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container my-4">
      <div class="title">
        <h3 class="fw-bold">My Show Room</h3>
        <p class="text-secondary">List Show Room Rafsan - 1202202291</p>
      </div>

      <div class="row mt-5">
        <?php foreach ($listCar as $car) : ?>
        <div class="col-md-5 mb-4">
          <div class="card bg-white shadow p-3 rounded" style="width: 100%;">
            <img src="AMG.jpeg" class="card-img-top" alt="card-image"
              height="200px">
            <div class="card-body">
              <h5 class="card-title fw-bold"><?= $car["nama_mobil"] ?></h5>
              <p class="card-text text-muted"><?= substr($car["deskripsi"], 0, 100) ?>Mercedes-AMG</p>

              <div class="d-flex justify-content-evenly gap-4">
                <a href="Detail-Rafsan.php?id=<?= $car['id'] ?>" class="btn btn-primary rounded-pill w-100">Detail</a>
                <a href="../config/delete.php?id=<?= $car['id'] ?>" class="btn btn-danger rounded-pill w-100">Delete</a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>