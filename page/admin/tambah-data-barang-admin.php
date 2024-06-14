<?php

include "../../config.php";

// Periksa koneksi
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil data kategori
$sql_categories = "SELECT * FROM categories";
$query_categories = mysqli_query($db, $sql_categories);

if (!$query_categories) {
    die("Query error: " . mysqli_error($db));
}

// Inisialisasi product_id
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : '';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data Barang</title>

  <!-- CDN AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./dashboardAdmin.php" class="brand-link elevation-4">
      <span class="brand-text font-weight-light">DASHBOARD ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            <a href="./dashboardAdmin.php" class="nav-link">
            <i class="far fa-regular fa-user mr-2"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dataBarang-dashboardAdmin.php" class="nav-link">
            <i class="far fa-regular fa-user mr-2"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- Form -->
            <form action="proses-tambah-data-barang-admin.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nama Produk</label>
                  <input type="text" id="inputName" class="form-control" name="name" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Description</label>
                  <input type="text" id="inputDescription" class="form-control" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="inputPrice">Price</label>
                  <input type="number" step="0.01" id="inputPrice" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="inputQuantity">Stock_Quantity</label>
                  <input type="number" id="inputQuantity" class="form-control" name="stock_quantity" placeholder="stock_quantity">
                </div>
                <div class="form-group">
                  <label for="inputCategory">Category</label>
                  <select id="inputCategory" class="form-control custom-select" name="category_id">
                    <?php while ($category = mysqli_fetch_assoc($query_categories)): ?>
                      <option value="<?php echo $category['category_id']; ?>">
                        <?php echo $category['name']; ?>
                      </option>
                    <?php endwhile;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputImage">Image</label>
                  <input type="file" id="inputImage" class="form-control" name="image">
                </div>
                <div class="row">
                  <div class="col-12 d-flex justify-content-around mb-2">
                    <a href="dataBarang-dashboardAdmin.php" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Add Product" name="simpan" class="btn btn-success float-right">
                  </div>
                </div>
              </div>
            </form>


            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong>Copyright &copy; 2024 <a href="index.php">Alvenio</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- CDN JS AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
