<?php
include('header.php');
?>
<!-- ======= Breadcrumbs ======= -->
   

<div class="breadcrumbs d-flex align-items-center " style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Services</h2>
      <ol class="justify-content-center pt-2">
        <li><a href="index.php">Home</a></li>
        <li>services</li>
      </ol>
    </div>
  </div>
  <!-- End Breadcrumbs -->
 <!-- ======= Services Section ======= -->
 <!-- <section id="services" class="services mt-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center title-color px-3">Services</h6>
        <h1 class="mb-5">Our Services</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Services Section -->
  <!-- start of packages -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center title-color px-3">Packages</h6>
        <h1 class="mb-5">Awesome Packages</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- single package start -->
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
              <img class="img-fluid" src="./backend/image/<?php echo $rw[4];?>" alt="" style="height: 350px; width:auto;">
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker title-color me-2"></i><?php echo $rw[2];?></small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar title-color me-2"></i><?php echo $rw[5];?>
                days</small>
              <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user title-color me-2"></i>2 Person</small> -->
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0"><?php echo $rw[10];?></h3>
              <div class="mb-3">
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
              </div>
              <!-- <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p> -->
              <div class="d-flex justify-content-center mb-2">
                <a href="offermore.php?id=<?php echo $rw[0];?>" class="btn btn-sm back-color px-3 border-end" style="border-radius: 30px 0 0 30px;">Read
                  More</a>
                <a href="booknow.php?id=<?php echo $rw[0];?>" class="btn btn-sm back-color px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- single package end -->
        <?php
      }
      ?>

       <!--  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/2.png.webp" alt="">
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker title-color me-2"></i>Indonesia</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar title-color me-2"></i>3
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user title-color me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">$139.00</h3>
              <div class="mb-3">
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
              </div>
              <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
              <div class="d-flex justify-content-center mb-2">
                <a href="#" class="btn btn-sm back-color px-3 border-end" style="border-radius: 30px 0 0 30px;">Read
                  More</a>
                <a href="#" class="btn btn-sm back-color px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/3.png.webp" alt="">
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker title-color me-2"></i>Malaysia</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar title-color me-2"></i>3
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user title-color me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">$189.00</h3>
              <div class="mb-3">
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
                <small class="fa fa-star title-color"></small>
              </div>
              <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
              <div class="d-flex justify-content-center mb-2">
                <a href="#" class="btn btn-sm back-color px-3 border-end" style="border-radius: 30px 0 0 30px;">Read
                  More</a>
                <a href="#" class="btn btn-sm back-color px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- End of packages -->


   <!-- ======= Footer ======= -->
  <?php

include('footer.php');
?>