<?php
require 'db.php';

$id = $_GET['id'];

function delete()
{
  global $id;
  global $db;

  $findFile = mysqli_query($db, "SELECT foto_mobil FROM showroom_rafsan_table WHERE id = $id");
  $photoFile = mysqli_fetch_row($findFile)[0];

  $deleteRow = "DELETE FROM showroom_rafsan_table WHERE id = $id";

  mysqli_query($db, $deleteRow);
  unlink('../assets/images/uploaded/' . $photoFile);
  return mysqli_affected_rows($db);
}

if (delete($id)) {
  header("ListCar-Rafsan.php");
  exit;
}