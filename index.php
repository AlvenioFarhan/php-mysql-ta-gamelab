<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <!-- Local Custom -->
    <link rel="stylesheet" href="custom/css/style.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Card Jquery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    />
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>
      ShoesMarket: Temukan Sepatu yang Tepat untuk Gaya dan Kebutuhan Anda
    </title>
  </head>
  <body>
    <!-- MODAL LOGIN -->
    <section>
      <div
        class="modal fade"
        id="loginModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Enter email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input
                    type="password"
                    class="form-control"
                    id="pwd"
                    placeholder="Enter password"
                    name="pswd"
                  />
                </div>
                <div class="form-group">
                  <a href="#" id="forgot-password-link">Lupa Password?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal CARD -->
    <section>
      <!-- ITEM 1 -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="card mb-3">
                <img
                  src="asset/image/card/nike1.jpg"
                  class="card-img-top img-fluid"
                  alt="..."
                />
                <div class="card-body">
                  <h3 class="card-title">Nike 1</h3>
                  <h5>Desc</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                    obcaecati odit, ullam laboriosam recusandae cupiditate
                    sapiente blanditiis facere consequatur aperiam excepturi
                    labore quasi, voluptas illum soluta eos, suscipit quos qui.
                  </p>

                  <p class="card-text">
                    <small class="text-muted">Harga: $500</small>
                  </p>
                  <label>Size</label>
                  <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                  </ul>
                  <div class="ratings mt-2">
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
              <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
              <a href="page/login.php" type="button" class="btn btn-primary">Add to Cart</a>
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div
        class="modal fade"
        id="exampleModal2"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="card mb-3">
                <img
                  src="asset/image/card/nike2.jpg"
                  class="card-img-top img-fluid"
                  alt="..."
                />
                <div class="card-body">
                  <h3 class="card-title">Nike 2</h3>
                  <h5>Desc</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aut, magni possimus inventore hic voluptatem, tempora
                    voluptatum dolor eaque omnis ex, ea rem soluta mollitia
                    aliquam voluptatibus accusantium qui! Pariatur, expedita.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Harga: $650</small>
                  </p>
                  <label>Size</label>
                  <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                  </ul>
                  <div class="ratings mt-2">
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                  </div>
                </div>
              </div>
              <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
              <a href="page/login.php" type="button" class="btn btn-primary">Add to Cart</a>
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div
        class="modal fade"
        id="exampleModal3"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="card mb-3">
                <img
                  src="asset/image/card/adidas1.jpg"
                  class="card-img-top img-fluid"
                  alt="..."
                />
                <div class="card-body">
                  <h3 class="card-title">Adidas 1</h3>
                  <h5>Desc</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Totam veniam veritatis doloribus, eveniet voluptates quod
                    suscipit excepturi vitae, aliquam culpa aspernatur debitis
                    nulla. Beatae quis nam rerum maxime aspernatur saepe?
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Harga: $800</small>
                  </p>
                  <label>Size</label>
                  <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                  </ul>
                  <div class="ratings mt-2">
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                  </div>
                </div>
              </div>
              <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
              <a href="page/login.php" type="button" class="btn btn-primary">Add to Cart</a>
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div
        class="modal fade"
        id="exampleModal4"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="card mb-3">
                <img
                  src="asset/image/card/converse1.jpg"
                  class="card-img-top img-fluid"
                  alt="..."
                />
                <div class="card-body">
                  <h3 class="card-title">Converse 1</h3>
                  <h5>Desc</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Totam veniam veritatis doloribus, eveniet voluptates quod
                    suscipit excepturi vitae, aliquam culpa aspernatur debitis
                    nulla. Beatae quis nam rerum maxime aspernatur saepe?
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Harga: $200</small>
                  </p>
                  <label>Size</label>
                  <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                  </ul>
                  <div class="ratings mt-2">
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
              <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
              <a href="page/login.php" type="button" class="btn btn-primary">Add to Cart</a>
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Back to top button -->
    <div class="container">
      <button
        type="button"
        class="btn btn-floating btn-lg"
        id="btn-back-to-top"
      >
        <img src="asset/icon/circle-arrow-up-solid.svg" alt="" />
      </button>
    </div>

    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg bg-secondary-subtle position-relative fixed-top"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ShoesMarket</a>
        <button
          class="navbar-toggler ms-auto"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNavDropdown"
        >
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button
            type="button"
            class="btn btn-outline-secondary black-text-custom"
          >
            Search
          </button>
          <a href="page/login.php" type="button"
            class="btn btn-dark mx-2">
            Login
          </a>
          <!-- <button
            type="button"
            class="btn btn-dark mx-2"
            data-bs-toggle="modal"
            
          >
            Login
          </button> -->
        </form>
      </div>
      <div
        class="d-lg-none container-fluid bg-secondary-subtle pb-3 d-flex justify-content-center"
      >
        <form class="d-flex justify-content-end" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button
            type="button"
            class="btn btn-outline-secondary black-text-custom"
          >
            Search
          </button>
          <a href="#" class="btn btn-dark mx-2">Login</a>
        </form>
      </div>
    </nav>

    <!-- Carousel -->
    <section>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="2500"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="5"
            aria-label="Slide 6"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="asset/image/carousel/carousel1.png"
              class="d-block w-100 img-fluid"
              alt="carousel1"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="asset/image/carousel/carousel2.png"
              class="d-block w-100 img-fluid"
              alt="carousel2"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="asset/image/carousel/carousel3.png"
              class="d-block w-100 img-fluid"
              alt="carousel3"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="asset/image/carousel/carousel4.png"
              class="d-block w-100 img-fluid"
              alt="carousel4"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="asset/image/carousel/carousel5.png"
              class="d-block w-100 img-fluid"
              alt="carousel5"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="asset/image/carousel/carousel6.png"
              class="d-block w-100 img-fluid"
              alt="carousel6"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- CARD -->
    <section>
      <div>
        <h1 class="container mt-5 mb-2">Product Recommendation</h1>
      </div>
    </section>
    <section class="container mb-5" data-aos="zoom-in" data-aos-offset="300">
      <div id="productCarousel" class="carousel slide">
        <div class="carousel-inner">
          <!-- Item -->
          <div class="carousel-item active">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
              <!-- Your first card -->
              <!-- Item 1 -->
              <div class="col">
                <div class="product">
                  <div class="imgbox">
                    <img src="asset/image/card/nike1.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Nike 1 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$500</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal1"
                    >
                      Buy Now
                    </button>
                  </div>
                </div>
              </div>

              <!-- Item 2-->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img src="asset/image/card/nike2.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Nike 2 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$650</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal2"
                    >
                      Buy Now
                    </button>
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img src="asset/image/card/adidas1.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Adidas 1 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$800</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal3"
                    >
                      Buy Now
                    </button>
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img
                      src="asset/image/card/converse1.jpg"
                      class="img-fluid"
                    />
                  </div>
                  <div class="specifies">
                    <h2>
                      Converse 1 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$200</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal4"
                    >
                      Buy Now
                    </button>
                  </div>
                </div>
              </div>
              <!-- Add more columns with your card content -->
            </div>
          </div>

          <div class="carousel-item">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
              <!-- Your Second card -->
              <!-- Item -->
              <div class="col">
                <div class="product">
                  <div class="imgbox">
                    <img
                      src="asset/image/card/converse2.jpg"
                      class="img-fluid"
                    />
                  </div>
                  <div class="specifies">
                    <h2>
                      Converse 2 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$400</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button class="btn btn-primary">Buy Now</button>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img src="asset/image/card/adidas2.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Adidas 1 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$900</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button class="btn btn-primary">Buy Now</button>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img src="asset/image/card/nike3.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Nike 3 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$5500</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button class="btn btn-primary">Buy Now</button>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product d-none d-sm-block">
                  <div class="imgbox">
                    <img src="asset/image/card/adidas3.jpg" class="img-fluid" />
                  </div>
                  <div class="specifies">
                    <h2>
                      Adidas 3 <br />
                      <span>Sepatu</span>
                    </h2>
                    <div class="price">$700</div>
                    <label>Desc</label>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <label>Size</label>
                    <ul>
                      <li>38</li>
                      <li>39</li>
                      <li>40</li>
                      <li>41</li>
                      <li>42</li>
                    </ul>
                    <button class="btn btn-primary">Buy Now</button>
                  </div>
                </div>
              </div>
              <!-- Add more columns with your card content -->
            </div>
          </div>
          <!-- Add more carousel items with similar structure -->
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#productCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#productCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>

    <div class="container w-25 mb-5">
      <a href="page/login.php" type="button" class="btn btn-outline-dark">See More</a>
    </div>

    <!-- Iklan section -->
    <section class="bg-body-secondary mb-5">
      <div class="container">
        <div
          class="row d-flex flex-column-reverse flex-md-row justify-content-center align-items-center"
        >
          <div
            class="col-12 col-md-6 px-5 text-center text-md-start"
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
          >
            <h1>
              Temukan berbagai pilihan sepatu terbaik untuk gayamu di Shoes
              Market
            </h1>
            <h4 class="pt-4 pb-2">Nikmati diskon 10% untuk member baru!</h4>
            <div
              class="d-flex justify-content-center align-items-center justify-content-md-start"
            >
              <a href="page/login.php" type="button" class="btn btn-danger w-50 w-md-25">
                GET PROMO
              </a>
            </div>
          </div>
          <div
            class="col-12 col-md-6 pt-4 pt-md-0 d-flex justify-content-center"
          >
            <img
              src="asset/image/vans-iklan.png"
              alt="Iklan"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Review Card -->
    <section>
      <div class="d-flex justify-content-center align-items-center">
        <h1>"What Customer Says"</h1>
      </div>
    </section>
    <section class="mt-2">
      <div
        id="carouselExample"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="1500"
      >
        <div class="carousel-inner">
          <!-- Item -->
          <div class="carousel-item active">
            <p class="lead font-italic mx-4 mx-md-5 text-center">
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
              error amet numquam iure provident voluptate esse quasi, voluptas
              nostrum quisquam!"
            </p>
            <div
              class="ratings d-flex justify-content-center align-items-center"
            >
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star"></i>
            </div>
            <div
              class="mt-2 mb-4 d-flex justify-content-center align-items-center"
            >
              <img
                src="asset/image/reviewcard/women1.jpg"
                class="rounded-circle img-fluid shadow-1-strong"
                alt="smaple image"
                width="100"
                height="100"
              />
            </div>
            <p class="text-muted mb-0 text-center">- Anna Morian</p>
          </div>

          <!-- Item -->
          <div class="carousel-item">
            <p class="lead font-italic mx-4 mx-md-5 text-center">
              "Neque cupiditate assumenda in maiores repudiandae mollitia
              adipisci maiores repudiandae mollitia consectetur adipisicing
              architecto elit sed adipiscing elit."
            </p>
            <div
              class="ratings d-flex justify-content-center align-items-center"
            >
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
            </div>
            <div
              class="mt-2 mb-4 d-flex justify-content-center align-items-center"
            >
              <img
                src="asset/image/reviewcard/women2.jpg"
                class="rounded-circle img-fluid shadow-1-strong"
                alt="smaple image"
                width="100"
                height="100"
              />
            </div>
            <p class="text-muted mb-0 text-center">- Teresa May</p>
          </div>

          <!-- Item -->
          <div class="carousel-item">
            <p class="lead font-italic mx-4 mx-md-5 text-center">
              "Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur est laborum neque
              cupiditate assumenda in maiores."
            </p>
            <div
              class="ratings d-flex justify-content-center align-items-center"
            >
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star"></i>
            </div>
            <div
              class="mt-2 mb-4 d-flex justify-content-center align-items-center"
            >
              <img
                src="asset/image/reviewcard/man1.jpg"
                class="rounded-circle img-fluid shadow-1-strong"
                alt="smaple image"
                width="100"
                height="100"
              />
            </div>
            <p class="text-muted mb-0 text-center">- Luke Tom</p>
          </div>
        </div>

        <button
          data-mdb-button-init
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          data-mdb-button-init
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-body-secondary newsletter mb-0 mt-5 pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-12 d-flex justify-content-center align-items-center"
          >
            <div class="content" data-aos="zoom-in" data-aos-duration="500">
              <h2 class="text-center">SUBSCRIBE TO OUR NEWSLETTER</h2>
              <div
                class="input-group d-flex justify-content-center align-items-center"
              >
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email"
                />

                <button type="button" class="btn btn-danger w-25 ms-2">
                  SUBSCRIBE NOW
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section>
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section
          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
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
            <!-- <a href="" class="me-4 text-reset">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-github"></i>
            </a> -->
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis,
                  quasi fugiat necessitatibus natus sunt ex aliquam illum sint
                  mollitia officia cumque? Esse, sunt ex. Incidunt provident
                  totam eveniet earum obcaecati.
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
                <p>
                  <a href="dashboardAdmin.php" class="text-reset">Admin</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i>Semarang, Indonesia</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
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
        <div
          class="text-center p-4"
          style="background-color: rgba(0, 0, 0, 0.05)"
        >
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

    <script>
      AOS.init();
    </script>
  </body>
</html>
