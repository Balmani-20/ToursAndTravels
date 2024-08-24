<?php
$con=mysqli_connect("localhost","root","","bus_travel");
if(isset($_POST['btn']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $date=$_POST['date'];
  $destination=$_POST['destination'];
  $request=$_POST['request'];
  $sql="insert into enquiry(name,email,datetime,destination,request) values('$name','$email','$date','$destination','$request')";
  if(mysqli_query($con,$sql))
  {
    echo "alert('Query Submitted')";
  }
  else
  {
    echo "Error".mysqli_error($con);
  }
}


?>
<?php
include('header.php');
?>


<!-- ======= Breadcrumbs ======= -->
   

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Enquiry</h2>
      <ol class="justify-content-center pt-2">
        <li><a href="index.html">Home</a></li>
        <li>Enquiry</li>
      </ol>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="booking p-5">
              <div class="row g-5 align-items-center">
                  <div class="col-md-6 text-white">
                      <h6 class="text-white text-uppercase">Booking</h6>
                      <h1 class="text-white mb-4">Online Booking</h1>
                      <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                      <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      <a class="btn btn-outline-light py-3 px-5 mt-2" href="about.php">Read More</a>
                  </div>
                  <div class="col-md-6">
                      <h1 class="text-white mb-4">Enquiry Form</h1>
                      <form method="post">
                          <div class="row g-3">
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="text" class="form-control bg-transparent" name="name" id="name" placeholder="Your Name" required>
                                      <label for="name">Your Name</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="email" required class="form-control bg-transparent" name="email" id="email" placeholder="Your Email">
                                      <label for="email">Your Email</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="datetime-local"  required class="form-control bg-transparent datetimepicker-input" id="datetime" name="date" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="datetime">Date & Time</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <select class="form-select bg-transparent" id="select1" name="destination">
                                        <?php $con=mysqli_connect("localhost","root","","bus_travel");
                                        $sql1="select * from package";
                                        $rs=mysqli_query($con,$sql1);
                                        while($rw=mysqli_fetch_row($rs))
                                          {
                                        ?>
                                              <option value="<?php echo $rw[2];?>"><?php echo $rw[2];?></option>
                                        <?php
                                          }
                                        ?>
                                      </select>
                                      <label for="select1">Destination</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control bg-transparent" required name="request" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                      <label for="message">Special Request</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-outline-light w-100 py-3" type="submit" name="btn">Send Query</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
      

   <!-- ======= Footer ======= -->
 <?php
 include('footer.php');
 ?>