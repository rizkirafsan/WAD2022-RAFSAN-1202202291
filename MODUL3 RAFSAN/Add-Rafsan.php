<?php
require "insert.php";
session_start();

if (isset($_POST['submit'])) {
  if (insert($_POST) > 0) {
    $popData = ["status" => true, "message" => "Data Berhasil Ditambahkan"];
    $_SESSION['addPop'] = $popData;

    header("Location: ListCar-Rafsan.php");
  } else {
    echo "
        <script>
          alert('data gagal di tambah');
          document.location.href = 'ListCar-Rafsan.php';
        </script>
        ";
    exit;
  }
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
      </div>
    </nav>
  </header>

  <main>
    <div class="container mt-4">
      <div class="title">
        <h3 class="fw-bold">Tambah Mobil</h3>
        <p class="text-secondary">Tambah Mobil Baru Anda Ke List Show Room</p>
      </div>

      <div class="row mt-5">
        <div class="col-md-8">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="carName" class="form-label fw-bold">Nama Mobil</label>
              <input type="text" class="form-control" id="carName" name="carName" required>
            </div>

            <div class="mb-3">
              <label for="ownerName" class="form-label fw-bold">Nama Pemiliki</label>
              <input type="text" class="form-control" id="ownerName" name="ownerName" value="Rafsan-1202204302" required>
            </div>

            <div class="mb-3">
              <label for="brand" class="form-label fw-bold">Merk</label>
              <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <div class="mb-3">
              <label for="buyDate" class="form-label fw-bold">Tanggal Beli</label>
              <input type="date" class="form-control" id="buyDate" name="buyDate" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label fw-bold">Deskripsi</label>
              <textarea class="form-control" id="description" name="description" style="height: 100px"
                required></textarea>
            </div>

            <div class="mb-3">
              <label for="photo" class="form-label fw-bold">Foto</label>
              <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>

            <div>
              <label class="form-check-label fw-bold" for="choice">Status Pembayaran</label>
              <div class="mb-3 d-flex gap-4" id="choice">
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="lunas" name="status" value="lunas">
                  <label class="form-check-label" for="lunas">Lunas</label><br>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="notLunas" name="status" value="notLunas">
                  <label class="form-check-label" for="notLunas">Belum Lunas</label><br>
                </div>
              </div>
            </div>

            <input type="submit" class="btn btn-primary my-5 px-5" name="submit" id="submit" value="Selesai">
          </form>
        </div>
      </div>

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>