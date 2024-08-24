<?php
include('header.php');
?>
<?php
$con=mysqli_connect("localhost","root","","bus_travel");
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select count(id) from register where email='$email'";
    $rs=mysqli_query($con,$sql);
    $rw=mysqli_fetch_array($rs);
    $id=$rw['count(id)'];
    if($id==1)
    {
        $_SESSION['email']=$email;
        header("Location:home.php");
    }
    else
    {
       echo "<script>alert('User does not exist')</script>";
    }
}




?>

    <!-- ======= Breadcrumbs ======= -->


    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Login</h2>
            <ol class="justify-content-center pt-2">
                <li><a href="index.html">Home</a></li>
                <li>Login</li>
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
                                <h2 class="text-uppercase text-center mb-5">Login</h2>

                                <form method="post">

                                  

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" requierd name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg" >Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" required  id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                   

                                   

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="btn"
                                            class="btn btn-danger  btn-block btn-lg gradient-custom-4 text-white">Login</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Don't Have  an account? <a href="Registration.php"
                                            class="fw-bold text-body"><u>Register here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
    <!-- ======= Footer ======= -->
    <?php 
    include ('footer.php');
?>