<?php
// Include file koneksi database
include "config.php";

// Query untuk mengambil data produk dari database
$sql = "SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.category_id = c.category_id";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <!-- Local Custom -->
    <link rel="stylesheet" href="custom/css/style.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Card Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>Dashboard User</title>
    <!-- CDN AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-secondary-subtle position-relative fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ShoesMarket</a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Man</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kids</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Collections
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nike</a></li>
                        <li><a class="dropdown-item" href="#">Adidas</a></li>
                        <li><a class="dropdown-item" href="#">Converse</a></li>
                        <li><a class="dropdown-item" href="#">Vans</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <form class="d-none d-lg-flex ms-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button type="button" class="btn btn-outline-secondary black-text-custom">Search</button>
            <a href="./page/logout.php" type="button" class="btn btn-danger mx-2">Logout</a>
        </form>
    </div>
    <div class="d-lg-none container-fluid bg-secondary-subtle pb-3 d-flex justify-content-center">
        <form class="d-flex justify-content-end" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button type="button" class="btn btn-outline-secondary black-text-custom">Search</button>
            <a href="./page/logout.php" class="btn btn-danger">Logout</a>
        </form>
    </div>
</nav>

<!-- Carousel -->
<section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/image/carousel/carousel1.png" class="d-block w-100 img-fluid" alt="carousel1" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/image/carousel/carousel2.png" class="d-block w-100 img-fluid" alt="carousel2" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/image/carousel/carousel3.png" class="d-block w-100 img-fluid" alt="carousel3" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/image/carousel/carousel4.png" class="d-block w-100 img-fluid" alt="carousel4" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fourth slide label</h5>
                    <p>Some representative placeholder content for the fourth slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/image/carousel/carousel5.png" class="d-block w-100 img-fluid" alt="carousel5" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fifth slide label</h5>
                    <p>Some representative placeholder content for the fifth slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/image/carousel/carousel6.png" class="d-block w-100 img-fluid" alt="carousel6" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sixth slide label</h5>
                    <p>Some representative placeholder content for the sixth slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary mt-5 pb-5">
                    <div class="card-header">
                        <h4 class="card-title">Shoes Product</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="btn-group w-100 mb-2">
                                <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All products </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (Nike) </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (Adidas) </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (Converse) </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (Vans) </a>
                            </div>
                            <div class="mb-2">
                                <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle products </a>
                                <div class="float-right">
                                    <select class="custom-select" style="width: auto;" data-sortOrder>
                                        <option value="index"> Sort by Position </option>
                                        <option value="sortData"> Sort by Custom Data </option>
                                    </select>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="filter-container p-0 row pt-3">
                                <?php
// Loop through each product in the result set
while ($row = mysqli_fetch_assoc($result)) {
    $productId = $row['product_id'];
    $productName = $row['name'];
    $productDescription = $row['description'];
    $productPrice = $row['price'];
    $productImage = $row['image'];
    $categoryName = $row['category_name'];
    $categoryId = $row['category_id'];

    // Trim ../../ from the image path
    $productImage = str_replace("../../", "", $productImage);
    ?>
                                    <div class="filtr-item col-sm-3" data-category="<?=$categoryId?>" data-sort="<?=$productName?>">
                                        <div class="product">
                                            <div class="imgbox">
                                                <img src="<?=$productImage?>" class="card-img-top img-fluid mb-2" alt="<?=$productName?>"/>
                                            </div>
                                            <div class="specifies">
                                                <h2><?=$productName?> <br /><span><?=$categoryName?></span></h2>
                                                <div class="price">$<?=number_format($productPrice, 2)?></div>
                                                <label><?=$productDescription?></label>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addToCartModal" data-id="<?=$productId?>" data-name="<?=$productName?>" data-description="<?=$productDescription?>" data-price="<?=$productPrice?>" data-image="<?=$productImage?>">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addToCartModalLabel">Add to Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <img id="modalImage" src="" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" id="modalName"></h5>
            <p class="card-text" id="modalDescription"></p>
            <p class="card-text">Price: $<span id="modalPrice"></span></p>
            <form id="addToCartForm" action="page/users/proses-add-to-cart-user.php" method="post">
              <input type="hidden" name="product_id" id="modalProductId">
              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
              </div>
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Footer -->
<section>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted mt-5">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>ShoesMarket
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quasi fugiat necessitatibus natus sunt ex aliquam illum sint mollitia officia cumque? Esse, sunt ex. Incidunt provident totam eveniet earum obcaecati.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                        <p>
                            <a href="#!" class="text-reset">Man</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Women</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kids</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Category</h6>
                        <p>
                            <a href="#!" class="text-reset">Nike</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Adidas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Converse</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vans</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Service</h6>
                        <p>
                            <a href="#!" class="text-reset">FAQ</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">News</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Career</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i>Semarang, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +62 1234 5678 1234</p>
                        <p><i class="fas fa-print me-3"></i> +62 1234 5678 1234</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="#!">AlvenioFarhanPrayogo</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>

<!-- CDN Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="custom/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- CDN JS AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="./plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="./plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  });

  $('#addToCartModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id');
    var name = button.data('name');
    var description = button.data('description');
    var price = button.data('price');
    var image = button.data('image');

    var modal = $(this);
    modal.find('.modal-title').text('Add ' + name + ' to Cart');
    modal.find('#modalName').text(name);
    modal.find('#modalDescription').text(description);
    modal.find('#modalPrice').text(price);
    modal.find('#modalImage').attr('src', image);
    modal.find('#modalProductId').val(id);
  });
</script>

<script>
  AOS.init();
</script>
</body>
</html>
