<?php
session_start();
if(empty($_SESSION['username']))
{
    header('location:login.php');
}

require_once('indexDb.php');
require_once('index_component.php');
$database=new createDb("hotel_list","hotels");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HOME</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="./cart_page.php">CART</a></li>
        </ul>
    </div>
    <div class="topcontent" id="topC">
        <div class="w3-container bar" id="Bar" width="100%">

            <img src="./photos/download__1_-removebg-preview.png" class="avo-icon" width="70" style="float: left;">
            <a href="./index.php">
                <h1 class="avo-title">BMS EATS</h1>
            </a>
            <ul class="topnav">
                <li> <a href="login.php"><i class="material-icons w3-text-white"><span
                                class="material-icons">power_settings_new</span></i></a></li>
                <a href="cart_page.php"><i style="float: right;color: white;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>


                <li style="float: right;"><a href="about.php">ABOUT</a></li>
                <li style="float: right;"><a href="contact.php">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="color: white;padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
        <a href="./index.php">
            <h1 class="w3-text-white text-content w3-animate-left">BMS COLLEGE OF ENGINEERING</h1>
            <h5 class="w3-text-white w3-animate-left desc">BMS EATS</h5>
        </a>

    </div>
    <div class="product-list">
        <?php
     $result=$database->getData();
      while($row=mysqli_fetch_assoc($result)){
      hotels($row['hid'],$row['hotel_name'],$row['hotel_image']);
       }
       ?>
    </div>



    <script src="index.js"></script>
    <?php require_once('footer.php'); ?>
</body>

</html>