<?php
error_reporting(0);
session_start();
require_once('ckDb.php');
require_once('cart_page_component.php');
$db=new createDb("hotel_list","products");
$total = 0;
$ototal=0;
$pid = $_POST["product_id"];
$qty = $_POST["quantity"];
$qty1 = $_POST["qty"];
$hid=$_POST["hotel_id"];
$subtotal=$_POST["subtotal"];
$subtotal1=0;
$subtotal2=0;
//echo $subtotal;
if (isset($_POST['add'])){
    $pid=$_POST['product_id'];
    $hid=$_POST["hotel_id"];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql1="SELECT * FROM cust,users where cust.pid!=0 AND cust.pid=$pid AND users.uid=cust.uid AND cust.hid=$hid";
   $result=mysqli_query($con,$sql1);
   
  if(mysqli_num_rows($result)==1)
  {
    echo "<script>alert('Product is already added in the cart..!')</script>";
         echo "<script>window.location = 'cart_page.php'</script>";
  }
  else{
    putval($pid,$qty,$hid);
  }
  }
  if(isset($_POST['add'])){
    echo "<script>window.location = 'cart_page.php'</script>";
  }
  
if (isset($_POST['remove'])){
$hid=$_POST["hotel_id"];
  remove($pid,$hid);
  }
  if(isset($_post['dec']) || isset($_post['inc']))
  {
    update($qty1,$pid);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./cart_page.css" />
    <link rel="stylesheet" href="./sip.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Cart-Page</title>
</head>

<body>
    <div class="sideBar w3-display-topright" id="sideBar">
        <ul>
            <li><button id="closeBtn" onclick="closeSide()">X Close</button></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>

        </ul>
    </div>
    <div class="topcont">
        <div class="w3-container w3-white" id="Bar" width="100%">

            <img src="./photos/download (1).jpg" class="avo-icon" width="70" style="float: left;">
            <a href="./index.php">
                <h1 class="avo-title" style="float: left;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:black; font-weight: 400;
    margin: 10px 0;font-size: 36px;">BMS EATS -
                    <H1 class="hotel_name" style="margin-top:12px;">CART</H1>
                </h1>
            </a>
            <ul class="topnav" style="padding-top: 0px;">

                <a href="cart_page.php"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="./about.php">ABOUT</a></li>
                <li style="float: right;"><a href="contact.php">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>
    <!-- body starts here  -->
    <div>
        <div class="wrap">
            <header class="cart-header cf">
                <?php  function number(){
                    $username=$_SESSION['username'];
                    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="SELECT * FROM cust,users where cust.pid!=0 AND users.username='$username' AND users.uid=cust.uid";
    $result=mysqli_query($con,$sql);
  echo  (mysqli_num_rows($result));
       return mysqli_num_rows($result);
   } ?>
                <strong>Total Items in Your Cart (<?php  number(); ?>)</strong>

            </header>
            <div class="cart-table">
                <ul>

                    <?php
                        $result = $db->getCart();
                      
                        // $product_id = array_column($_SESSION['cart'], 'product_id');
                        while ($row = mysqli_fetch_assoc($result)){
                       
                                    addtocart($row['pid'],$row['product_name'],$row['product_image'],$row['old_price'],$row['new_price'],$row['qty'],$row['hid']);
                                    $total = $total + (int)$row['new_price'];
                                     $ototal=$ototal+(int)$row['old_price'];
                                
                        }

?>

                </ul>


            </div>

            <div class="sub-table cf">
                <div class="summary-block">

                    <ul>
                        <li class="subtotal"><span class="sb-label">Subtotal</span><span
                                class="sb-value"><?php echo "₹" .  $_SESSION['subtotal2']; ?></span>

                        </li>

                        <li class="savings"><span class="sb-label"> Discount</span><span
                                class="sb-value"><?php echo "₹" . $_SESSION['subtotal2']- $_SESSION['subtotal1']; ?></span>

                        </li>
                        <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value">
                                <?php echo "₹" .  $_SESSION['subtotal1']; ?></span>
                        </li>
                    </ul>
                </div>

            </div>
            <a href="checkout.php">
                <div class="cart-footer cf">
                    <span class="btn" style="font-size: 1em;
            padding: 12px 30px;
            background: red;
            color: white;
            font-weight: 900;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;">Checkout</span>
                </div>
            </a>
        </div>
        <script>
        function upd(id, event, hid) {
            location.reload();
            var qty = event.target.value;
            console.log(hid);
            console.log(qty);
            console.log(qty);
            console.log(id);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {


                    console.log(this.responseText);
                }
            }
            xmlhttp.open("GET", "qty.php?id=" + id + "&qty=" + qty + "&hid=" + hid, true);

            xmlhttp.send(null);
            console.log("Done");
            //location.reload();
        }
        </script>
        <script src="./product_page.js"></script>
        <?php require_once('footer.php'); ?>
</body>

</html>