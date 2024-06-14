<?php

include("../../config.php");

// cek apakah tombol sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
    $id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

     // Hash the password using bcrypt
     $hashed_password = password_hash($password, PASSWORD_BCRYPT);
	
	// buat query update
	$sql = "UPDATE users SET username='$username', email='$email', password='$hashed_password' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-daftar-anggota.php
		header('Location: ../../dashboardAdmin.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

