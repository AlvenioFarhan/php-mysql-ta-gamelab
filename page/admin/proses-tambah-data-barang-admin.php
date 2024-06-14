<?php
include "../../config.php";

// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_id = $_POST['category_id'];

    // Proses upload file gambar
    $targetDir = "../../asset/image/uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Path lengkap file gambar yang disimpan di database
            $imagePath = $targetFilePath;

            // Query untuk menyimpan data ke database
            $sql = "INSERT INTO products (name, description, price, stock_quantity, category_id, image)
                    VALUES ('$name', '$description', '$price', '$stock_quantity', '$category_id', '$imagePath')";

            $query = mysqli_query($db, $sql);

            // Cek apakah query berhasil dijalankan
            if ($query) {
                header('Location: dataBarang-dashboardAdmin.php?status=sukses');
            } else {
                header('Location: tambah-data-barang-admin.php?status=gagal');
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    } else {
        echo "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diperbolehkan.";
    }
} else {
    die("Akses dilarang...");
}
