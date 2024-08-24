
<?php
 include('header.php');
 ?>
<?php

$con=mysqli_connect("localhost","root","","bus_travel");
if(isset($_POST['submit']))
{    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
   

        $sql="insert into contact(name,email,subject,message)values('$name','$email','$subject','$message')";
        if(mysqli_query($con,$sql))
        {
           echo "<script>alert('Successfully Inserted')</script>";
        }
        else
        {
            echo "Not inserted";
        }

    }
?>  
<!-- ======= Breadcrumbs ======= -->
   

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Contact Us</h2>
      <ol class="justify-content-center pt-2">
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>
  </div>
  <!-- End Breadcrumbs -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact mt-5">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>Vishal heights, Shop no 3 Tata croma mall,
			 opp. Siddheshwar hospital Shivaji chowk, to,
			 pune road, near by bus stand, Solapur,
			 Maharashtra 413002</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>info@chadchankartravels.in</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>070283 33999</p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15205.446165440911!2d75.8977508230316!3d17.680372968224372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da8722115519%3A0x9374dd719704ecb1!2sChadchankar%20Travel%20%26%20Tourist!5e0!3m2!1sen!2sin!4v1711363311184!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6">
          <form action="" method="post"  role="form" >
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <!-- <input type="submit" name="submit" value="submit"> --><br><br>
            <div ><input type="submit" name="submit" value="send message" class="btn btn-danger text-white text-center"></div>
          </form>
        
      </div>

    </div>        
  </section>
  <!-- End Contact Section -->

 <?php
 include('footer.php');
 ?>