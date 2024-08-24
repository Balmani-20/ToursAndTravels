<?php
session_start();
$con=mysqli_connect("localhost","root","","bus_travel");
$pack=$_GET['pack'];
$seat=$_GET['seat'];
// echo $pack;
// echo $seat;
$cancel="DELETE booking_detail, booking_table FROM booking_detail INNER JOIN booking_table ON booking_detail.bid = booking_table.id WHERE booking_table.pid ='$pack' AND booking_detail.seat_no='$seat'";
if($rs=mysqli_query($con,$cancel))
{
	// echo "<script>alert('booking cancelled successfully');</script>";
	header("Location:profile.php?message=booking_cancelled");
}
else
{
	echo "Error in cancelling the booking".mysqli_error($con);
}
?>