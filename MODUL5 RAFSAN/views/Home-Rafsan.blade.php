
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Home</title>
</head>
<body>
  <header>
    @include("layout.navbar")
  </header>
  <main>
    <div class="container">
      <div class="row align-items-center mt-5">
        <div class="col">
          <h1 class="fw-bold">Selamat Datang di Show Room Rafsan</h1>
          <div class="description">
            <p>Showroom mobil Rafsan adalah showroom mobil dengan pilihan mobil yang beragam</p>
          </div>
          <a href="" type="button" class="btn btn-primary">MyCar</a>
          <div class="about mt-5">
            <div class="d-flex gap-4">
              <img src="/image/ead.png" alt="ead.png" width="100" height="25">
              <p>Rafsan_1202202291</p>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="/image/car.jpg" width="450" height="500" class="rounded" alt="mobil_home">
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>
</html>