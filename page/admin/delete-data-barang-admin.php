<?php

include "../../config.php";

if (isset($_GET['id'])) {
    // ambil id dari query string
    $id = $_GET['id'];

    // ambil nama file gambar dari database
    $sql_select = "SELECT image FROM products WHERE product_id=$id";
    $query_select = mysqli_query($db, $sql_select);

    if ($query_select) {
        $product = mysqli_fetch_assoc($query_select);
        $imageName = $product['image'];

        // buat query hapus
        $sql_delete = "DELETE FROM products WHERE product_id=$id";
        $query_delete = mysqli_query($db, $sql_delete);

        // apakah query hapus berhasil?
        if ($query_delete) {
            // hapus gambar dari direktori
            $imagePath = 'asset/image/uploads/' . $imageName;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            header('Location: dataBarang-dashboardAdmin.php');
        } else {
            die("Gagal menghapus product...");
        }
    } else {
        die("Gagal mengambil data product...");
    }
} else {
    die("Akses dilarang...");
}
