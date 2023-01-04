<?php
require "../config/connector.php";

$datas = showAll();

session_start();

if(!isset($_SESSION["login"])){
  header("Location: Login-Rafsan.php");
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
  <link rel="stylesheet" href="../asset/styles/index.css">

  <title>List MobilS</title>
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
              <a class="nav-link active" href="Home-Rafsan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ListCar-Rafsan.php">MyCar</a>
            </li>
          </ul>
        </div>
        <div class="add-car">
            <a href="Add-Rafsan.php" class="btn btn-light text-primary">Add Car</a>
      </div>
    </nav>
  </header>

  <main>
    <div class="container mt-5">
      <div class="judul">
        <h2>My Showroom</h2>
        <p>List Showroom Rafsan_1202202291</p>
      </div>
      <div class="row gap-4">
        <?php foreach($datas as $data):?>
          <div class="col-md-5">
            <div class="card">
              <img src="../asset/images/ShelbyCobra.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $data['nama_mobil']?></h5>
                <p class="card-text"><?= $data['deskripsi']?></p>
              </div>
              <div class="card-body">
              <div class="row justify-content-center gap-4">
                <div class="col-md-5"><a href="Detail-Rafsan.php?id=<?=$data['id_mobil']?>" class="btn btn-primary rounded-pill w-100">Detail</a></div>
                <div class="col-md-5"><a href="../config/delete.php?id=<?=$data['id_mobil']?>" class="btn btn-danger rounded-pill w-100">Delete</a></div>
              </div>
              
              </div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>