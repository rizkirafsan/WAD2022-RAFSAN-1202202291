<?php
require 'db.php';

function insert($data)
{
  global $db;

  $name = htmlspecialchars($data['carName']);
  $owner = htmlspecialchars($data['ownerName']);
  $brand = htmlspecialchars($data['brand']);
  $date = htmlspecialchars($data['buyDate']);
  $desc = htmlspecialchars($data['description']);
  $status = htmlspecialchars($data['status']);

  $img = uploadImg();

  if (!$img) {
    return false;
  }

  $query = "INSERT INTO showroom_rafsan_table VALUES ('', '$name', '$owner', '$brand', '$date', '$desc', '$img', '$status')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);

  // $status = htmlspecialchars($data['status']);
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