<?php
include('header.php');
?>


<!-- ======= Breadcrumbs ======= -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Slider-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!---End Slider-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Booking</h2>
      <ol class="justify-content-center pt-2">
        <li><a href="index.html">Home</a></li>
        <li>Booking</li>
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
                        
                      <h1 class="text-white mb-4">Booking</h1>
                  
                    <form>
                          <div class="row g-3">
                              <div class="col-12">
                                  <div class="form-floating">
                                      <input type="text" class="form-control bg-transparent" id="name" placeholder="Package Name">
                                      <label for="name">Package Name</label>
                                  </div>
                              </div>
                              
                              <div class="col-12">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Customer Email" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="datetime">Customer Email</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="Date" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
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
                                      <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                      <label for="name">Your Name</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="tel" class="form-control bg-transparent" id="email" placeholder="Your Mobile">
                                      <label for="mobile">Your Mobile</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="number" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Age" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="age">Age</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="number" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Aadhar No" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="Aadhar No">Aadhar No</label>
                                  </div>
                              </div>
                             
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control bg-transparent" placeholder="Address" id="message" style="height: 100px"></textarea>
                                      <label for="message">Address</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                   Gender &nbsp;&nbsp;&nbsp;
                                  <input type="radio" value="female">Female &nbsp;&nbsp;&nbsp;
                                  <input type="radio"value="male">male
                                  
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
                                  <div class="form-floating date" id="date3" data-target-input="nearest">
                                      <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="" data-target="#date3" data-toggle="datetimepicker" />
                                      <label for="datetime">Seat Number</label>
                                  </div>
                              </div><br>
                               <div class="col-6">
                                  <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                              </div>
</center>
                    </div>
              </div>
              
          </div>

          </form>
      </div>
  </div>
  <!-- Booking Start -->
      



<?php
include('footer.php');
?>