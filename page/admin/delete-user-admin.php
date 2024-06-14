<?php

include("../../config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM users WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: ../../dashboardAdmin.php');
	} else {
		die("Gagal menghapus user...");
	}
	
} else {
	die("akses dilarang...");
}