<?php
$showroom=mysqli_connect("localhost", "root", "", "wad_modul4_rafsan", 3308);

function showAll(){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_rafsan";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}
function detail($id){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_rafsan WHERE id_mobil=$id";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}
function profile($id)
{
        global $showroom;

        $query = "SELECT * FROM user_rafsan WHERE id=$id";
        $dataprofile = mysqli_query($showroom, $query);
        $baris = [];

        while ($row = mysqli_fetch_assoc($dataprofile)){
                $baris[]=$row;
        };

        return $baris;

}; 
?>