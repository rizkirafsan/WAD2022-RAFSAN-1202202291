
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row g-3">
            <div class="col">
                <img src="/image/car.jpg" width="450" height="500" alt="car" style="margin-top: 50px;">
            </div>
            <div class="col" style="margin-top: 50px;">
                <h2>Register</h2>
                <form action="/register" method="POST">
                    @csrf

                    <label for="" class="fw-bold">Email </label>
                    <!-- <input required type="email" name="email" class="form-control mt-3 mb-3" placeholder="Masukkan Alamat Email"> -->
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="email" required value="{{ old('email')}}">
                @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
                    <label for="" class="fw-bold">Nama </label>
                    <input required type="text" name="name" class="form-control mt-3 mb-3" placeholder="Masukkan Nama Lengkap">

                    <label for="" class="fw-bold">Nomor Handphone </label>
                    <input required type="text" name="no_hp" class="form-control mt-3 mb-3" placeholder="Masukkan Nomor Handphone">

                    <label for="" class="fw-bold">Kata Sandi </label>
                    <!-- <input required type="password" name="pass" class="form-control mt-3 mb-3" placeholder="Kata Sandi Anda"> -->
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"
                    aria-describedby="passwordHelp" name="password" required value="{{ old('password')}}">
                @error('password')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror

                    <label for="" class="fw-bold">Konfirmasi Kata Sandi </label>
                    <!-- <input required type="password" name="cpass" class="form-control mt-3 mb-5" placeholder="Ulangi Kata Sandi Anda"> -->

                    <input type="password" class="form-control @error('cpass') is-invalid @enderror" id="exampleInputcpass1"
                    aria-describedby="passwordHelp" name="cpass" required value="{{ old('cpass')}}">
                @error('cpass')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                @enderror
                    <div class="d-flex justify-content-center">
                        <button name="daftar" type="submit" class="btn btn-primary w-50 text-center">Daftar</button>
                    </div>

                    <p class="text-center mt-4">Anda sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>