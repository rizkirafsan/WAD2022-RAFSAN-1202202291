<?php
require "connector.php";
$id = $_GET['id'];

function delete($id){
    global $showroom;

    $query = "DELETE FROM showroom_rafsan WHERE id_mobil = $id";
    mysqli_query($showroom, $query);
    return mysqli_affected_rows($showroom);
}

if(delete($id)){
    header("Location: ../pages/ListCar-Rafsan.php");
    exit;
}


?>