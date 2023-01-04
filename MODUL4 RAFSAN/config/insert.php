<?php
require "connector.php";

function insert($data){
    global $showroom;

    $nama = $data["nama"];
    $pemiliki = $data["pemiliki"];
    $merk = $data["merk"];
    $tanggal = $data["tanggal"];
    $deskripsi = $data["deskripsi"];

    $query="INSERT INTO showroom_rafsan VALUES('', '$nama', '$pemiliki', '$merk', '$tanggal', '$deskripsi', 'mobil.jpg', 'Lunas')";
    mysqli_query($showroom, $query);
    return mysqli_affected_rows($showroom);
}
?>