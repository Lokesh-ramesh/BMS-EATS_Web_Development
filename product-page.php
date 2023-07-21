<?php
session_start();
$_SESSION['product_id']= $_POST['product_id'];
require_once('ckDb.php');
$database=new createDb("hotel_list","products");
$db = new mysqli('localhost','root','','hotel_list');
$_SESSION['hotel_id']=$_POST['hotel_id'];
$hid = $_SESSION['hotel_id'];
//echo $hid;
$hid = $db->query("select hotel_name from hotels where hid = '$hid'");
$h = $hid->fetch_array()[0] ?? '';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $h;?>-food</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="product-page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="topcont">
        <div class="w3-container w3-white" id="Bar" width="100%">

            <img src="./photos/download (1).jpg" class="avo-icon" width="70" style="float: left;">
            <a href="./index.php">
                <h1 class="avo-title" style="float: left; color:black;">BMS EATS -
                    <H1 class="hotel_name"><?php echo $h;?></H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="cart_page.php"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="./about.php">ABOUT</a></li>
                <li style="float: right;"><a href="contact.php">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>



    <div class="card-wrapper">
        <?php

       $result=$database->getData1();
       while($row=mysqli_fetch_assoc($result)){
       product_info($row['pid'],$row['product_name'],$row['product_image'],$row['old_price'],$row['new_price'],$_POST['hotel_id']);
       //$pid,$product_name,$product_image,$old_price,$new_price
        }
     ?>
    </div>

    <?php
   
      function product_info($pid,$product_name,$product_image,$old_price,$new_price,$hid)  {  
       
        $product_image = "." . "/" ."photos". "/" .$product_image;
        echo "
        <div class=\"card\">
            <div class=\"product-images\">
                <img class=\"mySlides\" id=\"product-img\" src=\"$product_image.jpg\" alt=\"shoe image\">
            </div>
            <div class=\"product-content\">
                <h2 class=\"pproduct-title\" id=\"pproduct-name\">$product_name</h2>
                <div class=\"product-price\">
                    <p class=\"last-price\"><span id=\"op\">₹$old_price</span></p>
                    <p class=\"new-price\"><span id=\"dp\"><b>₹$new_price</b></span></p>
                </div>

                <div class=\"product-detail\">
                    <h2>About this item: </h2>
                    <I>
                        <p>Enjoy the authentic south Indian food</p><I>

                </div>

                <div class=\"purchase-info\">

                    <br>
                    <form action=\"cart_page.php\" method=\"post\">
                    <input type=\"button\" class=\"minus\" onclick=\"decrementValue()\" value=\"-\" />
                    <input type='text' class='quant' name='quantity' value=\"1\" max=\"10\" size=\"1\" id='number' />
                    <span>qty</span>
                    <input type=\"button\" class=\"plus\" onclick=\"incrementValue()\" value=\"+\" />
                    
    
        <button class=\"btn\" type=\"submit\" name=\"add\">add to cart</button>
        <input type='hidden' name='product_id' value='$pid'>
        <input type='hidden' name='hotel_id' value='$hid'>
    </form>

    </div>
    </div>
    </div>";

    }   
    ?>
    <script src="product-page.js"></script>

</body>

</html>