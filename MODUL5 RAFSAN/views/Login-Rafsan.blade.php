
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="row g-3">
      <div class="col">
        <img src="/image/car.jpg" width="450" height="500" alt="innova" style="margin-top: 100px;">
      </div>
      <div class="col">

        <form action="/login" method="post">
          @csrf
          <div class="container px-5" style="margin-top: 170px;">

            <h3 class="text-center">Login</h3>

            <label for="" class="fw-bold">Email</label>
            <input value="" type="email" name="email" class="form-control mt-3 mb-3" placeholder="Masukkan Email Anda">

            <label for="" class="fw-bold">Kata Sandi</label>
            <input value="" type="password" name="password" class="form-control mt-3 mb-3" placeholder="Kata Sandi Anda">

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <div class="d-flex justify-content-center">
              <button name="login" type="submit" class="btn btn-primary w-50 text-center">Login</button>
            </div>

            <p class="text-center mt-4">Anda belum punya akun? <a href="/register">Register</a></p>

          </div>
        </form>
      </div>
    </div>
</body>

</html>