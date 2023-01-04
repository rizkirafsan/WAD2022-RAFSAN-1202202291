<?php
require "../config/insert.php";

if(isset($_POST['submit'])){
    if(insert($_POST) > 0){
        header("Location: ListCar-Rafsan.php");
    }
}

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

  <title>Add Car</title>
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
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda ke List Showroom</p>
         </div>
            <div class="row">
            <div class="col-md-10">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="pemiliki" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="pemiliki" name="pemiliki">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
        </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>