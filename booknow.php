<?php 
include('header.php');
?>
<?php
if(!isset($_SESSION['email']))
{
  $url="login.php";
  echo "<script type='text/javascript'>";
  echo 'window.location.href="'.$url.'";';
  echo "</script>";
}
?>

<!-- ======= Breadcrumbs ======= -->
   
<style>
body{
  color:#0a0a0aeb;
}
.dropbtn {
  background-color: #131a2f;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #131a2f;}
#seatsDiagram td.selected {
    background-color: greenyellow;
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand;
    animation-duration: 300ms;
    animation-fill-mode: both;
}   
    
#seatsDiagram td, #displaySeats td {
    padding: 10px;
    text-align: center;
    margin: 0.3rem;
    width: 40px;
    height: 40px;
    border: 3px solid transparent;
    display: inline-block;
    background-color: #ccc;
    border-radius: 5px;
  cursor:pointer;
  
}
#seatsDiagram td:hover{
  border-color:greenyellow;
}
#seatsDiagram td.notAvailable, #displaySeats td.notAvailable {
    color: white;
    background-color: #db2619;
}
.seats-icon{
  height:22px;
  width:25px;
  position:absolute;
}
td .demos{
  background:white;
}
#seatsDiagram td.notAvailable, #displaySeats td.notAvailable {
    color: white;
    background-color: #db2619;
}
#displaySeats {
    margin: 3rem auto 1rem auto;
}   
.dropbtn {
  background-color: #131a2f;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #131a2f;}

</style>
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
  <?php 
  $con=mysqli_connect("localhost","root","","bus_travel");
  $id1=$_SESSION['pid'];
  $sql1="select * from package where id=$id1";
  $rs1=mysqli_query($con,$sql1);
  $rw1=mysqli_fetch_row($rs1);
  ?>
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2><?php echo $rw1[2]?></h2>
      <!-- <ol class="justify-content-center pt-2">
        <li><a href="home.html">Home</a></li>
        <li>About</li>
      </ol> -->
    </div>
  </div>
  <!-- End Breadcrumbs -->

 <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" >
                        
                      <h1 class="text-white mb-4">Booking</h1>
                  
                    <form action="seatbook.php" method="post">
                          <div class="row g-3">
                              <div class="col-12">
                                  <div class="form-floating">
                                      <input type="text" name="pid" class="form-control bg-transparent" value="<?php echo $rw1[2];?>" id="packagename" style="color:white" placeholder="Package Name">
                                      <label for="name">Package Name</label>
                                  </div>
                              </div>
                              <?php
                              $email=$_SESSION['email'];
                              ?>
                              <div class="col-12">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="text" name="cid" class="form-control bg-transparent datetimepicker-input" style="color:white" id="datetime" placeholder="Customer Email" value="<?php echo $email;?>" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="datetime">Customer Email</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="datetime-local" name="date" class="form-control bg-transparent datetimepicker-input" style="color:white" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required />
                                      <label for="datetime">Select Booking Date</label>
                                  </div>
                              </div>
                             
                          </div>
                                </div>
                  <div class="col-md-6">
                      <h1 class="text-white mb-4">Booking Details</h1>
                    
                          <div class="row g-3">
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="text" style="color:white" name="name" required class="form-control bg-transparent" id="name" placeholder="Your Name">
                                      <label for="name">Your Name</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="tel" style="color:white" name="mobile" required class="form-control bg-transparent" id="email" placeholder="Your Mobile">
                                      <label for="mobile">Your Mobile</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="number" name="age" required class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Age" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="age">Age</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="number"  style="color:white" name="aadhar" required class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Aadhar No" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="Aadhar No">Aadhar No</label>
                                  </div>
                              </div>
                             
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control bg-transparent" style="color:white" required  name="address" placeholder="Address" id="message" style="height: 100px"></textarea>
                                      <label for="message">Address</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating" style="color:white">
                                   Gender &nbsp;&nbsp;&nbsp;
                                  <input type="radio" value="female" name="gender" >Female &nbsp;&nbsp;&nbsp;
                                  <input type="radio"value="male" name="gender" >male
                                  
                                  </div>
                              </div>
                        </div>

  
                             
                          </div>
                      
                  </div>
                  <center>
                              <div  class="booking p-5 " >
                                          <table id="seatsDiagram" >
                                            <tr>
                
                                    <td id="seat1"  data-name="D">
                                        <input type="hidden" class="s1" value="D">D
                                    </td>
                                    <td id="seat2" data-name="E">
                                        <input type="hidden" class="s2" value="E">E
                                    </td>
                                    <td id="seat3" data-name="2">
                                        <input type="hidden" class="s3" value="2">2
                                    </td>
                                    <td id="seat4" data-name="3">
                                        <input type="hidden" class="s4" value="3">3
                                    </td>
                                    <td id="seat5" data-name="10">
                                        <input type="hidden" class="s5" value="10">10
                                    </td>
                                    <td id="seat6" data-name="11">11
                                        <input type="hidden" class="s6" value="11">
                                    </td>
                                    <td id="seat7" data-name="18">18
                                        <input type="hidden" class="s7" value="18">
                                    </td>
                                    <td id="seat8" data-name="19">19
                                        <input type="hidden" class="s8" value="19">
                                    </td>
                                    <td id="seat9" data-name="26">26
                                        <input type="hidden" class="s9" value="26">
                                    </td>
                                    <td id="seat10" data-name="27">27
                                        <input type="hidden" class="s10" value="27">
                                    </td>
                                    <td id="seat11" data-name="35">35
                                        <input type="hidden" class="s11" value="35">
                                    </td>
                
                                </tr>
                                <tr>
                <td id="seat12" data-name="C">C
                                <input type="hidden" class="s12" value="C">
                                </td>
                                    <td id="seat13" data-name="F" >F
                                    <input type="hidden" class="s13" value="F">
                                    </td>
                                    <td id="seat14" data-name="1">1
                                        <input type="hidden" class="s14" value="1">
                                    </td>
                                    <td id="seat15" data-name="4">4
                                    <input type="hidden" class="s15" value="4">
                                    </td>
                                    <td id="seat16" data-name="9">9
                                    <input type="hidden" class="s16" value="9">
                                    </td>
                                    <td id="seat17" data-name="12">12
                                    <input type="hidden" class="s17" value="12">
                                    </td>
                                    <td id="seat18" data-name="17">17
                                    <input type="hidden" class="s18" value="17">
                                    </td>
                                    <td id="seat19" data-name="20">20
                                    <input type="hidden" class="s19" value="20">
                                    </td>
                                    <td id="seat20" data-name="25">25
                                    <input type="hidden" class="s20" value="25">
                                    </td>
                                    <td id="seat21" data-name="28">28
                                    <input type="hidden" class="s21" value="28">
                                    </td>
                                    <td id="seat22" data-name="34">34
                                    <input type="hidden" class="s22" value="34">
                                    </td>
                                </tr>
                
                                <tr>
                                                                              
                    <td style="float:right;" id="seat23" data-name="33">33
                                        <input type="hidden" class="s23" value="33">
                                    </td>
                                </tr>
                                <tr>
                    
                                    <td id="seat24" data-name="B">B
                                    <input type="hidden" class="s24" value="B">
                                    </td>
                                    <td id="seat25" data-name="G">G
                                    <input type="hidden" class="s25" value="G">
                                    </td>
                                    <td id="seat26" data-name="J">J
                                    <input type="hidden" class="s26" value="J">
                                    </td>
                                    <td id="seat27" data-name="5">5
                                    <input type="hidden" class="s27" value="5">
                                    </td>
                                    <td id="seat28" data-name="8">8
                                    <input type="hidden" class="s28" value="8">
                                    </td>
                                    <td id="seat29" data-name="13">13
                                    <input type="hidden" class="s29" value="13">
                                    </td>
                                    <td id="seat30" data-name="16">16
                                    <input type="hidden" class="s30" value="16">
                                    </td>
                                    <td id="seat31" data-name="21">21
                                    <input type="hidden" class="s31" value="21">
                                    </td>
                                    <td id="seat32" data-name="24">24
                                    <input type="hidden" class="s32" value="24">
                                    </td>
                                    <td id="seat33" data-name="29">29
                                    <input type="hidden" class="s33" value="29">
                                    </td>
                                    <td id="seat34" data-name="32">32
                                    <input type="hidden" class="s34" value="32">
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td id="seat35" data-name="A">A
                                    <input type="hidden" class="s35" value="A">
                                    </td>
                                    <td id="seat36" data-name="H">H
                                    <input type="hidden" class="s36" value="H">
                                    </td>
                                    <td id="seat37" data-name="I">I
                                    <input type="hidden" class="s37" value="I">
                                    </td>
                                    <td id="seat38" data-name="6">6
                                    <input type="hidden" class="s38" value="6">
                                    </td>
                                    <td id="seat39" data-name="7">7
                                    <input type="hidden" class="s39" value="7">
                                    </td>
                                    <td id="seat40" data-name="14">14
                                    <input type="hidden" class="s40" value="14">
                                    </td>
                                    <td id="seat41" data-name="15">15
                                    <input type="hidden" class="s41" value="15">
                                    </td>
                                    <td id="seat42" data-name="22">22
                                    <input type="hidden" class="s42" value="22">
                                    </td>
                                    <td id="seat43" data-name="23">23
                                    <input type="hidden" class="s43" value="23">
                                    </td>
                                    <td id="seat44" data-name="30">30
                                    <input type="hidden" class="s44" value="30">
                                    </td>
                                    <td id="seat45" data-name="31">31
                                    <input type="hidden" class="s45" value="31">
                                    </td>
                                </tr>
                            </table><br>
                            <div class="col-6 ">
                                  <div class="row g-3 align-items-center mb-4">
                                <div class="col-auto">
                                    <label for="seatInput" class="col-form-label" style="color:white">Seat Number</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="seatInput" class="form-control" name="seat" required>
                                </div>
                                <div class="col-auto">
                                    <span id="seatInfo" class="form-text" style="color:white">
                                    Select from the above figure, Maximum 1 seat.
                                    </span>
                                </div>
                            </div>
                              </div><br>
                               <div class="col-6">
                                  <button class="btn btn-outline-light w-100 py-3" name="btn" type="submit">Book Now</button>
                              </div>
                        </center>
                    </div>
              </div>
              
          </div>

          </form>
      </div>
  </div>
<!-- Form end -->

   
<script>
const seatDiagram = document.querySelector("#seatsDiagram");
const seatInputInput = document.querySelector("#seatInput");
seatDiagram.addEventListener("click", selectSeat);
let selected_id; 

function selectSeat(evt)
{
  if(evt.target.nodeName == "TD" && !evt.target.className.includes("space") && !evt.target.className.includes("notAvailable"))
  {
    if(!selected_id || evt.target.dataset.name === selected_id)
    {
      selected_id = evt.target.dataset.name;
      evt.target.classList.toggle("selected");

      if(!evt.target.className.includes("selected"))
      {
        selected_id = "";
      }

      seatInput.value = selected_id;
    } 
  }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
        var id=$("#packagename").val();
        //alert(id);    
        $.ajax({
                        url:"booking_seat_number.php?bus_number="+id,
                        method:"get",
                        success:function(data)
                        {
                           //console.log(data);
                            var splitName =[];
                            //alert('testing');
                            //var test=data.split('::');
                            splitName.push(data.split('::'));
                            var length = splitName[0].length;
                            //alert(length);
                            //alert(splitName[0][1]);
                            //console.log(splitName);
                            // var a=test[j];
                            // var c=test.length;
                            // alert(c);
                            k=0;
                            p=1;
                            for(j=0; j<length; j++)
                            {
                                for(i=1; i<=45; i++)
                                {
                                    var a=splitName[0][k];
                                    
                                    var gen=splitName[0][p];
                                    var nseats = splitName[0][p+1];
                                    //alert(nseats);
                                    var bk=$(".s"+i).val();
                                    //alert(gen);
                                    if(nseats == "43" && bk=='A'){
                                        $("#seat"+i).html("")
                                    }
                                    else if(nseats == "43" && bk=='B'){
                                        $("#seat"+i).html("")
                                    }
                                    if(a==bk && gen=='female')
                                    {
                                        document.getElementById('seat'+i).style.cssText="background-color:green;";
                                        // $("#seat"+i).live('click', function (e){
                                        //     if($(this).hasClass('disabled'))
                                        //         {
                                        //             e.prefentDefault();
                                        //             e.stopPropagation();
                                        //         }
                                        //     // do your stuff here
                                        // });
                                        k=k+3;
                                        p=p+3;
                                    }
                                    else if(a==bk && gen=='male')
                                    {
                                        document.getElementById('seat'+i).style.cssText="background-color:red;";
                                        $("#seat"+i).on('click', function (e){
                                            if($(this).hasClass('disabled'))
                                                {
                                                    e.prefentDefault();
                                                    e.stopPropagation();
                                                }
                                            // do your stuff here
                                        });
                                        k=k+3;
                                p=p+3;
                                    }
                                
                                }
                                
                                
                                
                            }
                            
                            
                        },
                        error:function(data)
                        {
                            alert(data);
                        }
                    });     
       
    
  
    
    $(".booking_id").on("change",function (){
      id=$(this).val();
          $.ajax({
        url:"booking_page.php?id="+id,
        method:"get",
        success:function(data)
        {
          
          var test=data.split('::');
        
          $(".customer_id").val(test[2]);
          $(".package").val(test[0]);
          $(".bus_no").val(test[1]);
          
        },
        error: function(data)
        {
          alert(data);
        }
      });
      });
    });
</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

   <!-- ======= Footer ======= -->
<?php
include('footer.php');
?>