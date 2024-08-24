<?php
$con=mysqli_connect("localhost","root","","bus_travel");
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rpass=$_POST['repeat'];
     if($password==$rpass)
     {
        $sql="insert into register(name,email,password) values('$name','$email','$password')";
        mysqli_query($con,$sql);
        header("Location:login.php");
     }
     else
     {
        echo "password and Confirm password doesn't match";
     }
}


?>


<?php
include('header.php');
?>

    <!-- ======= Breadcrumbs ======= -->


    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Registration</h2>
            <ol class="justify-content-center pt-2">
                <li><a href="index.html">Home</a></li>
                <li>Registration</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->




    <section class=" bg-image mt-5">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; background-color: #fbf0f1;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="post">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" requierd name="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" required name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" required  name="password" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="repeat" required id="form3Example4cdg"
                                            class="form-control form-control-lg"/>
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" required type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="btn"
                                            class="btn btn-danger  btn-block btn-lg gradient-custom-4 text-white">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                                            class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <?php 
    include ('footer.php');
?>