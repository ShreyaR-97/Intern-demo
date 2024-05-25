<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Commerce</title>

    <?php include("./includes/header.php")?>
  </head>
  <body>
    <!-- nav bar start -->
      <?php include("./includes/navbar.php")?>
    <!-- nav bar ends -->

    <!-- section 1 starts-->
    <div class="container-fluid section-1">
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
                <h1 class="section-1-heading text-center text-white">
                    WELCOME TO JK'S ECOMMERCE
                </h1>
                <a href="#products" class="btn btn-outline-light"> Explore Our Products</a>
            </div>
            <div class="col-sm-12 col-md-6">
              <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
            </div>
        </div>
    </div>
    <!-- section 1 ends -->
<hr>
     <!-- section 2 starts-->
     <div class="container">
        <div class="row">
            <h2 class="text-dark text-center">Categories</h2>

            <!-- categories card 1 starts -->
            <div class="col-sm-12 col-md-3">
                <div class="card">
                    <img src="assets/images/cosemtics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">COMESTICS</h5>
                      <p class="card-text">
                        <ul>
                          <li>Consealer</li>
                          <li>Compact</li>
                          <li>Highlighter</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <!-- categories card 1 ends -->

             <!-- categories card 2 starts -->
             <div class="col-sm-12 col-md-3">
                <div class="card">
                    <img src="assets/images/electronics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ELECTRONICS</h5>
                      <p class="card-text">
                        <ul>
                          <li>Mobile</li>
                          <li>Tablet</li>
                          <li>Laptop</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <!-- categories card 2 ends -->

             <!-- categories card 3 starts -->
             <div class="col-sm-12 col-md-3">
                <div class="card">
                    <img src="assets/images/books.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">BOOKS</h5>
                      <p class="card-text">
                        <ul>
                          <li>Fiction books</li>
                          <li>Motivation books</li>
                          <li>Non-Fiction books</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <!-- categories card 3 ends -->
        </div>
    </div>
    <!-- section 2 ends -->
<hr>
     <!-- section 3 starts-->
     <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12"></div>
        </div>
    </div>
    <!-- section 3 ends -->
<hr>
   <!-- section 2 starts-->
   <div id="products" class="container">
      <div class="row">
          <h2 class="text-dark text-center">Products</h2>

          <!-- categories card 1 starts -->
          <div class="col-sm-12 col-md-3">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>
          <!-- categories card 1 ends -->

           <!-- categories card 2 starts -->
           <div class="col-sm-12 col-md-3">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>
          <!-- categories card 2 ends -->

           <!-- categories card 3 starts -->
           <div class="col-sm-12 col-md-3">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>
          <!-- categories card 3 ends -->
      </div>
  </div>
  <!-- section 2 ends -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

<!-- script link -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <!-- costum js -->
    <script src="./assets/js/main.js"></script>



  </body>
</html>
