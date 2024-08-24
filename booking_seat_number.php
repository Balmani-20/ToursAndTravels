<?php
// include('config.php');
$con=mysqli_connect("localhost","root","","bus_travel");
$bno = $_GET['bus_number'];
$sql="SELECT

    booking_detail.*, bus.bus_type 
FROM 
    booking_detail
JOIN 
    booking_table ON booking_detail.bid = booking_table.id 
JOIN 
    package ON booking_table.pid = package.title 
JOIN 
    bus ON bus.id = package.busno
WHERE 
    package.title = '$bno'";

$rs = mysqli_query($con, $sql);
if (!$rs) {
    // Query failed
    echo "Error: " . mysqli_error($con);
} else {
    // Query successful, continue fetching rows
    $testdata = "";
    while ($row = mysqli_fetch_row($rs)) {
        $rk = $row[7] . "::" . $row[6];
        $testdata .= $rk . "::" . $row[10] . "::";
        // echo $row[5];
    }
    echo $testdata;
    // echo  "Sample";
}
?>