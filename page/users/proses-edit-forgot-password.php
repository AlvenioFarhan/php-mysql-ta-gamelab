<?php
include("../../config.php");

// cek apakah tombol sudah diklik atau belum?
if(isset($_POST['simpanpass'])){
    
    // ambil data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];

    // Validasi apakah password dan retype password sama
    if($password !== $retype_password) {
        // Menggunakan session untuk menyimpan pesan kesalahan
        session_start();
        $_SESSION['error'] = "Password yang dimasukkan tidak sama. Silakan coba lagi.";
        
        // Redirect kembali ke halaman edit-forgot-password.php
        header('Location: ../forgot-password.php');
        exit();
    }

    // Hash the password using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    // buat query update (pastikan email di-escape untuk mencegah SQL injection)
    $sql = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
    $query = mysqli_query($db, $sql);
    
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman login.php
        header('Location: ../login.php');
        exit();
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
    
} else {
    die("Akses dilarang...");
}
