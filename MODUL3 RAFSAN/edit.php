<?php
require 'db.php';

$id = $_GET['id'];

function edit($data)
{
  global $db;
  global $id;

  $name = htmlspecialchars($data['carName']);
  $owner = htmlspecialchars($data['ownerName']);
  $brand = htmlspecialchars($data['brand']);
  $date = htmlspecialchars($data['buyDate']);
  $desc = htmlspecialchars($data['description']);
  $status = htmlspecialchars($data['status']);
  $currPhoto = htmlspecialchars($data['photo']);
  $oldPhoto = $data['oldPhoto'];

  if ($_FILES['photo']['error'] == 4) {
    $currPhoto = $oldPhoto;
  } else {
    $currPhoto = uploadImg();
    unlink("../assets/images/uploaded/" . $oldPhoto);
  }



  $query = "UPDATE showroom_rafsan_table SET 
            nama_mobil='$name',
            pemilik_mobil='$owner', 
            merk_mobil='$brand',
            tanggal_beli='$date',
            deskripsi='$desc',
            foto_mobil='$currPhoto',
            status_pembayaran='$status'
            WHERE id=$id";

  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function uploadImg()
{
  $nameImg = $_FILES['photo']['name'];
  $tmpName = $_FILES['photo']['tmp_name'];
  $error = $_FILES['photo']['error'];
  $size = $_FILES['photo']['size'];

  if ($error == 4) {
    echo "
    <script>
      alert('Harap Masukan Gambar');
      document.location.href = 'ListCar-Rafsan.php';
    </script>
    ";
    return false;
  }

  if ($size > 2097152) {
    return false;
  }

  // solve if dulicate
  $extensionImg = explode('.', $nameImg);
  $newNameFile = uniqid();

  $newNameFile .= '.';
  $newNameFile .= end($extensionImg);

  move_uploaded_file($tmpName, '../assets/images/uploaded/' . $newNameFile);

  return $newNameFile;
}