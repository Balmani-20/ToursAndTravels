<?php
session_start();
$con=mysqli_connect("localhost","root","","bus_travel");
if(isset($_POST['btn']))
{
	$pid=$_POST['pid'];
	$cid=$_POST['cid'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$aadhar=$_POST['aadhar'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$seat=$_POST['seat'];
	date_default_timezone_set('Asia/Kolkata');
	$d=date('Y-m-d H:i:s');
	$sql="insert into booking_table(pid,cid,b_date,date) value('$pid','$cid','$d','$date')";
	mysqli_query($con,$sql);
	$bsq="select max(id) from booking_table";
	$rs=mysqli_query($con,$bsq);
	$rw=mysqli_fetch_array($rs);
	$book=$rw['max(id)'];
	$bid=$book;
	$sql2="insert into booking_detail(name,mobile,aadhar,address,age,gender,seat_no,bid) values('$name','$mobile','$aadhar','$address',$age,'$gender',$seat,$bid)";
		if(mysqli_query($con,$sql2))
		{
			echo "<script>alert('Thanks for Booking')</script>";
			header("Location:home.php");
		}
		else
		{
			echo "detail error".mysqli_error($con);
		}
}


?>