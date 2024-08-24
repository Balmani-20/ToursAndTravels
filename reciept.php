<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="reciept.css">
</head>
<body>

<!-- Invoice 5 start -->
<div class="invoice-5 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-contant">
                            <div class="invoice-headar">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="rec-img.png" alt="logo">
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="invoice-number-inner">
                                            <?php
                                                $inv=rand(1000,9999);
                                            ?>
                                            <h2 class="name">Invoice No: #<?php echo $inv;?></h2>
                                            <p class="mb-0">Invoice Date: <span><?php echo date("d/m/Y");?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-30">
                                        <div class="invoice-number">
                                            <h4 class="inv-title-1">Invoice To</h4>
                                            <?php
                                                $con=mysqli_connect("localhost","root","","bus_travel");
                                                $email=$_SESSION['email'];
                                                $details="select * from register where email='$email'";
                                                $rs=mysqli_query($con,$details);
                                                $rw=mysqli_fetch_row($rs);
                                            ?>
                                            <h2 class="name mb-10"><?php echo $rw[1]?></h2>
                                            <p class="invo-addr-1 mb-0">
                                                <!-- Theme Vessel <br/> -->
                                                <?php echo $rw[2];?> <br/>
                                                <!-- 21-12 Green Street, Meherpur<br/> -->
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-30">
                                        <div class="invoice-number">
                                            <div class="invoice-number-inner">
                                                <h4 class="inv-title-1">Invoice From</h4>
                                                <h2 class="name mb-10">Chadchankar Travels</h2>
                                                <p class="invo-addr-1 mb-0">
                                                    Vishal heights, Shop no 3 Tata croma mall,<br>
                                                     opp. Siddheshwar hospital Shivaji chowk,<br>
                                                      to, pune road, near by bus stand, <br>
                                                      Solapur, Maharashtra 413002<br>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-30 invoice-contact-us">
                                        <h4 class="inv-title-1">Get In Touch</h4>
                                        <h2 class="name mb-10">Contact Us</h2>
                                        <ul class="link">
                                            <!-- <li>
                                                <i class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh
                                            </li> -->
                                            <li>
                                                <i class="fa fa-envelope"></i> <a href=""> info@chadchankartravels.in</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i> <a href="">070283 33999</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="order-summary">
                                    <div class="table-outer">
                                        <table class="default-table invoice-table">
                                            <thead>
                                            <tr>
                                                <th>Package Name</th>
                                                <th>Seat Number</th>
                                                <th>Gender</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <!-- <th>Total</th> -->
                                            </tr>
                                            </thead>
                                            <tbody>
                        <?php
                            $email=$_SESSION['email'];
                            $total=0;
                            $book="SELECT * FROM booking_table INNER JOIN booking_detail ON booking_table.id = booking_detail.bid WHERE booking_table.cid ='$email'";
                            $rs1=mysqli_query($con,$book);
                            while($rw1=mysqli_fetch_array($rs1))
                            {
                                $package="select charges from package where title='$rw1[1]'";
                                $r=mysqli_query($con,$package);
                               
                        ?>
                                            <tr>
                                                <td><?php echo $rw1[1]?></td>
                                                <td><?php echo $rw1[12]?></td>
                                                <td><?php echo $rw1[11]?></td>
                                                <?php 
                                                while($price=mysqli_fetch_array($r))
                                                {
                                                ?>
                                                    <td><?php echo "Rs.".$price[0];?></td>
                                                    <td><?php echo $rw1[3];?>
                                            </tr>
                                            
                                <?php
                                $total=$total+$price[0];
                                }
                            }
                                ?>
                                            <tr>
                                                <td></td>
                                                <td><strong>Total Due</strong></td>
                                                <td></td>
                                                <td><strong><?php echo "Rs. ". $total?></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 col-sm-7">
                                        <!-- <div class="terms-conditions mb-30">
                                            <h3 class="inv-title-1 mb-10">Terms & Conditions</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                        </div> -->
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="payment-method mb-30">
                                            <!-- <h3 class="inv-title-1 mb-10">Payment Method</h3> -->
                                            <ul class="payment-method-list-1 text-14">
                                                <!-- <li><strong>Account No:</strong> 00 123 647 840</li>
                                                <li><strong>Account Name:</strong> Jhon Doe</li>
                                                <li><strong>Branch Name:</strong> xyz</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <!-- <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 5 end -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
