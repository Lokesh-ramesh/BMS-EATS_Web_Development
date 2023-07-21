<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'hotel_list');
$pid = $_GET['id'];
$qty = $_GET['qty'];
$hid=$_GET['hid'];
$q = " update cust set qty = '$qty' where pid = '$pid' AND hid='$hid'";
$result = mysqli_query($con, $q);
?>