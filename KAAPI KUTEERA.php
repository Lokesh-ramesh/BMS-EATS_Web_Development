<?php

session_start();
require_once('ckDb.php');
require_once('ck_componenet.php');
$db = new mysqli('localhost','root','','hotel_list');
$_SESSION['hotel_id']=$_POST['hotel_id'];
$hid = $_SESSION['hotel_id'];
//echo $hid;
$hid = $db->query("select hotel_name from hotels where hid = '$hid'");
$h = $hid->fetch_array()[0] ?? '';
//echo "$h";
$database=new createDb("hotel_list","products");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $h;?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="ck.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    button,
    input[type="submit"],
    input[type="reset"] {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }
    </style>
</head>

<body>
    <div class="sideBar w3-display-topright" id="sideBar">
        <ul>
            <li><button id="closeBtn" onclick="closeSide()">X Close</button></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact1.html">CONTACT</a></li>
            <li><a href="./cart_page.php">CART</a></li>

        </ul>
    </div>
    <div class="topcont">
        <div class="w3-container w3-white" id="Bar" width="100%">

            <img src="./photos/download (1).jpg" class="avo-icon" width="70" style="float: left;">
            <a href="./index.php">
                <h1 class="avo-title" style="float: left; color:black;">BMS EATS -
                    <H1 class="hotel_name"><?php echo $h;?></H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="./cart_page.php"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="./about.html">ABOUT</a></li>
                <li style="float: right;"><a href="contact1.html">CONTACT</a></li>


            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>

    <div class="product-list1">
        <?php
     $result=$database->getData();
      while($row=mysqli_fetch_assoc($result)){
  products($row['pid'],$row['product_name'],$row['product_image'],$row['old_price'],$row['new_price'],$_SESSION['hotel_id']);
      //$pid,$product_name,$product_image,$old_price,$new_price
       }
       ?>
    </div>
    <script src="vk1.js"></script>
    <?php require_once('footer.php'); ?>
</body>

</html>