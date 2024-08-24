<?php
  include('header.php');
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/slider1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"  style="color:white;">Welcome to <span>Chadchakar Travels & Tourist</span></h2>
              <p class="animate__animated animate__fadeInUp" style="color:black;">
              </p>
              <a href="about.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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

        <div class="carousel-item" style="background-image: url(img/slide3.jpg)"  style="color:black-color;">
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
          <h1 class="mb-4">Welcome to <span class="title-color">Chadchakar Travels & Tourist</span></h1>
          <p class="mb-4"></p>
          <p class="mb-4"></p>
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
          <a class="btn back-color py-2 px-3 mt-2" href="about.php">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- ======= Services Section ======= -->
  <div class="popular_destination_area ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
          <!-- <div class="section_title text-center">
    <h3>Popular Destination</h3>
    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
    </div> -->
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center title-color px-3">Places</h6>
            <h1 class="mb-5">Popular Places</h1>
          </div>
        </div>
      </div>
      <div class="row mt-5">
      <?php
        $con=mysqli_connect("localhost","root","","bus_travel");
        $sql="select * from package";
        $rs=mysqli_query($con,$sql);
        while($rw=mysqli_fetch_row($rs))
        {
          ?>  
        <div class="col-lg-4 col-md-6">
          <div class="single_destination">
            <div class="thumb">
              <a href="offermore.php?id=<?php echo $rw[0];?>"><img src="./backend/image/<?php echo $rw[4];?>" height="600px" width="300px" alt=""></a>
            </div>
            <div class="content">
              <a href="offermore.php?id=<?php echo $rw[0];?>"><p class="d-flex align-items-center"><?php echo $rw[2];?> </a></p>
            </div>
          </div>
        </div>
        <?php
        }
        ?>      
      </div>
    </div>
  </div>


  <!-- Package Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center title-color px-3">Packages</h6>
        <h1 class="mb-5">Awesome Packages</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        $con=mysqli_connect("localhost","root","","bus_travel");
        $sql="select * from package";
        $rs=mysqli_query($con,$sql);
        while($rw=mysqli_fetch_row($rs))
        {
          ?>        
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="./backend/image/<?php echo $rw[4];?>" style="height:400px; width:600px;" alt="">
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker title-color me-2"></i><?php echo $rw[2];?></small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar title-color me-2"></i><?php echo $rw[1];?></small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user title-color me-2"></i><?php echo $rw[5];?> Persons</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-bus title-color me-2"></i><?php echo $rw[11];?></small>
              
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0"><?php echo $rw[10];?></h3>
              <h3 class="mb-0"><?php echo $rw[6];?></h3>
              <div class="mb-3">
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
              </div>
              <p><?php echo $rw[3];?></p>
              <div class="d-flex justify-content-center mb-2">
                <a href="offermore.php?id=<?php echo $rw[0];?>" class="btn btn-sm back-color px-3 border-end" style="border-radius: 30px 0 0 30px;">Read
                  More</a>
                <a href="booknow.php?id=<?php echo $rw[0];?>" class="btn btn-sm back-color px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
              </div>
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
  <!-- Package End -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <!-- <div class="section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
    </div> -->
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center title-color px-3">Testimonials</h6>
        <h1 class="mb-5">customer review </h1>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="img\1.png.jpg" class="testimonial-img" alt="">
                <h3>Sakshi Patil</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      The experience with this travels is an amazing one!!!
                      The services they provided, the way they treated us is truly mesmerizing.
                      Perhaps it was a lovely experience ❤️.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="img\4.jpg.jpg" class="testimonial-img" alt="">
                <h3>Asmita Bagale</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Tourists packages from Chadchankar Travel and tours are good. 
                      We had fantastic experience of Ashtavinayak Tour.
                       They provided better accommodations and food through entire travel.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="img/3.png.webp" class="testimonial-img" alt="">
                <h3>Sanskruti Dasade</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Best travel agency. 
Thank you Jagdish bhau for providing proper assistance during covid restrictions. 
Bus provided was clean and well maintained as promised. 
Driver was also cooperative. 
Recommended for family trips and functions.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="img/1.png.webp" class="testimonial-img" alt="">
                <h3>Swara Kore</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="img/2.png.webp" class="testimonial-img" alt="">
                <h3>Gayatri Kore</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->


  <!-- ======= Footer ======= -->
 <?php
include('footer.php');
?>