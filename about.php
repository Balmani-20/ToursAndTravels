<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="home.html"><img src="img/Logo.png" class="w-100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-md-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.html"> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Destination.html"> Destination</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="Destination.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Page
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="places.html">Places</a></li>
              <li><a class="dropdown-item" href="Booking.html">Booking</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html"> Contact</a>
          </li>
          <a href="Registration.html" class="a"><button class="reg-but">Register</button></a>

        </ul>
      </div>
    </div>
  </nav> -->
<?php
  include('header.php');
?>
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/slider1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown" style="color:black">Welcome to <span>Chadchakar Travels & Tourist</span></h2>
              <p class="animate__animated animate__fadeInUp" style="color:black">
                </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/slider2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown" style="color:Red;">Chadchakar Travels & Tourist</h2>
              <p class="animate__animated animate__fadeInUp" style="color:black;">
                </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/slide3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Chadchakar Travels & Tourist</h2>
              <p class="animate__animated animate__fadeInUp">
                </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
<!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/download(1).jpg" alt=""
              style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start title-color pe-3">About Us</h6>
          <h1 class="mb-4">Welcome to <span class="title-color">Tourist</span></h1>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
            Clita erat ipsum et lorem et sit.</p>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
            Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>First Class Flights</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>Handpicked Hotels</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>5 Star Accommodations</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>Latest Model Vehicles</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>150 Premium City Tours</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right title-color me-2"></i>24/7 Service</p>
            </div>
          </div>
          <a class="btn back-color py-2 px-3 mt-2" href="">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- ======= Footer ======= -->
 <?php
include('footer.php');
?>