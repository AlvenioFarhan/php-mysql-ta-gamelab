<?php
include "../../config.php";

// Cek apakah form telah disubmit
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_id = $_POST['category_id'];

    // Default nilai image
    $imagePath = '';

    // Cek apakah ada file yang diunggah
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Path untuk menyimpan file gambar
        $targetDir = "../../asset/image/uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Path gambar yang disimpan di database
                $imagePath = $targetFilePath;
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
                exit;
            }
        } else {
            echo "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diperbolehkan.";
            exit;
        }
    } elseif (!empty($_POST['existing_image'])) {
        // Jika tidak ada file yang diunggah, gunakan path gambar yang sudah ada
        $imagePath = $_POST['existing_image'];
    } else {
        // Jika tidak ada file yang diunggah dan tidak ada existing_image, peroleh path dari database
        $sql_select = "SELECT image FROM products WHERE product_id=$product_id";
        $query_select = mysqli_query($db, $sql_select);

        if ($query_select) {
            $product = mysqli_fetch_assoc($query_select);
            $imagePath = $product['image'];
        }
    }

    // Query untuk mengupdate data produk
    $sql = "UPDATE products SET
                name='$name',
                description='$description',
                price='$price',
                stock_quantity='$stock_quantity',
                category_id='$category_id',
                image='$imagePath'
            WHERE product_id=$product_id";

    // Eksekusi query
    $query = mysqli_query($db, $sql);

    // Apakah query update berhasil?
    if ($query) {
        // Kalau berhasil alihkan ke halaman list-data-barang
        header('Location: dataBarang-dashboardAdmin.php');
    } else {
        // Kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
