<!DOCTYPE html>
<html lang="en">

<head>
   <!-- include common css file-->
  <?php include "common/common-css.php"  ?>
  <title>bootstrap 5</title>
 

</head>

<body>
  <!-- include header file-->
  <?php include "common/header.php" ?>
  
  <!-- banner -->
  <section class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="container-xl">
            <div class="banner-content">
              <div class="row">
              <div class="col-md-6 p-md-5 col-sm-12 p-sm-5 col-lg-6 align-self-center">
              <div class="banner-text">
                <strong class="text-white">Digital Marketing</strong>
                <h1 class="text-white">Build Your Brand with Leading Digital Marketing Agency</h1>
                <p class="text-white">Edifying Voyages is a creative digital marketing company that supports brands'
                  glitter while transforming the businesses digitally for new growth opportunities.</p>
                <button type="button" class="btn btn-outline-light text-capitalize px-4">start now</button>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 p-md-2 align-self-center">
              <div class="banner-image">
                <img src="assets/images/banner.png" class="img-fluid">
              </div>
            </div>
            </div>

            
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  <!-- cards -->

  <section class="card-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 mt-sm-3 col-md-4">
          
            <div class="card p-3 shadow-lg">
              <div class="card-image">
                <img src="assets/images/growth.png" class="card-img-top " alt="...">
              </div>

              <div class="card-body">
                <h5 class="card-title">guaranted growth</h5>
                <p class="card-text">Helping buisneses to grow with our years of experiences that convert them more.</p>

              </div>
            </div>


        </div>
        <div class="col-sm-6 mt-sm-3 col-md-4">
          
            <div class="card p-3 shadow-lg">
              <div class="card-image">
                <img src="assets/images/dedicated-team.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">dedicated team</h5>
                <p class="card-text">dedicated team to plan and develop the roadmap to delivery best outcomes</p>

              </div>
            </div>
        

        </div>
        <div class="col-sm-6 mt-sm-3 col-md-4">
          
            <div class="card p-3 shadow-lg">
              <div class="card-image">
                <img src="assets/images/brand-building.png" class="card-img-top " alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">brand building</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.</p>

              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- second banner -->
  <section class="second-banner">
    <img src="assets/images/sales-banner.webp" alt="">
    <div class="centered ">
      <h2>want more sales? </h2>
      <p> <i>get your <u class="text-capitalize">free proposal</u> on how we can help you with that!</i>
      </p>
      <div class="second-banner-button">
        <button type="button" class="btn btn-outline-light text-capitalize">get started now <span><i
              class="fa-solid fa-angles-right"></i></span></button>
      </div>
    </div>
  </section>

  <!-- Contact section -->
  <?php include "common/contact-form.php"?>

  

  <!-- include footer file -->
   <?php include "common/footer.php"?>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>