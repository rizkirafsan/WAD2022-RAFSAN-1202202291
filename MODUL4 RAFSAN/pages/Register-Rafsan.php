<?php
require "../config/register.php";
if(isset($_POST["submit"])){
    if(register($_POST) > 0){
        header("location: Login-Rafsan.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="../asset/styles/index.css">

    <title>Register</title>
</head>

<body>
    <main>
        <div class="row align-items-center">
            <div class="col" style="height: 100vh;">
                <img src="../Asset/images/FordMstg.jpg" alt="" height="95%" width="95%">
            </div>
            <div class="col">
                <form action="" method="POST">
                    <h2 class="fw-bol">Register</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" Name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor Handphone*</label>
                        <input type="text" class="form-control" id="nohp" name="nohp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi*</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Kata Sandi*</label>
                        <input type="password" class="form-control" id="password1" name="password1">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Daftar</button>
                    <p>Anda sudah punya akun? <a href="Login-Rafsan.php">Login</a> </p>
                </form>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>