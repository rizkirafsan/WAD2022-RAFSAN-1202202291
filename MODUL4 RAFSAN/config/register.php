<?php
$showroom=mysqli_connect("localhost", "root", "", "wad_modul4_rafsan", 3308);
function register($data){
    global $showroom;

    $email = $data["email"];
	$nama = $data["nama"];
	$nohp = $data["nohp"];
	$password = $data["password"];
	$verifikasi = $data["password1"];

    if($password !== $verifikasi){
		echo "
		<script>
			alert('kata sandi berbeda');
		</script>
		";
		header("Location: ../pages/Register-Rafsan.php");
		exit;
	}

	$query="INSERT INTO user_rafsan VALUES('', '$nama', '$email', '$password', '$nohp')";
    mysqli_query($showroom, $query);
	return mysqli_affected_rows($showroom);
}

?>