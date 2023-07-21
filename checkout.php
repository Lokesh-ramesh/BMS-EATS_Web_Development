<!DOCTYPE html>
<html>
<?php
require_once('checkoutdb.php');
$result = getorders();
error_reporting(E_ERROR | E_PARSE);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="ck.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

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
                <h1 class="avo-title" style="float: left; color:black;margin-top:10px;">BMS EATS -
                    <H1 class="hotel_name" style="margin-top:10px">CHECKOUT</H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="./cart_page.php"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="./about.php">ABOUT</a></li>
                <li style="float: right;"><a href="contact.php">CONTACT</a></li>


            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>
    <section class="section p-5 w-100">
        <div class="row w-80 p-3 shadow">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body" style="background-color:#f6f9ff;">
                        <h5 class="card-title">Student Details Form</h5>
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" id="det" action="checkout.php" method="post" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fname" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" name="lname" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">USN</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" name="usn" required>
                                    <div class="invalid-feedback">
                                        Please provide an USN.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="validationCustom03" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide an e-mail.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">Semester</label>
                                <select class="form-select" id="sem" name="sem" required>
                                    <option selected disabled value="">...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid semester.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <!-- End Custom agree -->
                            <hr style="border-top:1px solid black; box-sizing:border-box;">
                            <h5 class="card-title mt-0 mb-0">Preferred Payment Methods</h5>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        UPI-Google Pay
                                    </label>
                                    <img src="gpay.jpeg" style="width: 30px;height: 30px;">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        UPI-PhonePe
                                    </label>
                                    <img src="phonepe.jpeg" style="width: 30px;height: 30px;">
                                </div>

                            </div>
                            <hr style="border-top:1px solid black; box-sizing:border-box;">
                            <h5 class="card-title mt-2 p-0">Pay Via UPI</h5>
                            <div class="col-md-6 has-validation">
                                <input type="email" id="validationCustomUsername" class="form-control"
                                    placeholder="Enter your UPI ID" name="upi" required>
                            </div>
                            <?php
                                if(!($_POST['sucess']==1)):
                                ?>
                            <div class="col-12"><input type="hidden" name="sucess" value="1"></input> <button
                                    class="btn btn-primary" type="submit">Submit form</button></div>
                            <?php endif;?>
                            <!-- End Custom Styled Validation -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm order-md-last">
                <div class="card">
                    <div class="card-body" style="background-color:#f6f9ff;">
                        <?php
                            if($_POST['sucess']==1):
                                ?>
                        <h5 class="text-muted p-3">FORM SUBMITTED</H5>
                        <?php endif;?>
                        <h4 class="d-flex justify-content-between align-item-center">
                            <span class="text-muted p-3">Your Cart</span>
                            <span
                                class="badge bg-secondary rounded-3 m-3 "><?php echo (mysqli_num_rows($result)); ?></span>
                        </h4>
                        <ul class="list-group">
                            <?php
                            
                        while ($row = mysqli_fetch_assoc($result)){
                       order($row['product_name'],($row['qty']*$row['new_price']));
                            }?>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <h6>Total (Rs)</h6>
                                </div>
                                <span class="text-muted">Rs<?php echo $_SESSION['subtotal1']; ?></span>
                            </li>
                        </ul>
                        <?php
                                if($_POST['sucess']==1):
                                ?>
                        <div class="pt-3">
                            <button type="submit" class="btn btn-primary" data-mdb-toggle="modal"
                                data-mdb-target="#exampleModal">
                                <input type='hidden' name='sucess' value='1'>
                                PAY NOW
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content border-top border-bottom border-5"
                                        style="border-color: #35558a !important;">
                                        <div class="modal-header border-bottom-0">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <img class="rounded mx-auto d-block" src="successfully-done.gif"
                                            style="width:120px;height: 120px;px">
                                        <div class="modal-body text-start text-black p-4">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <p class="modal-title text-uppercase fw-bold mb-1">Date</p>
                                                    <p id="current_date"></p>
                                                    <script>
                                                    var today = new Date();
                                                    var date = today.getFullYear() + '-' + (today.getMonth() + 1) +
                                                        '-' + today.getDate();
                                                    document.getElementById("current_date").innerHTML = date;
                                                    </script>
                                                </div>

                                                <div class="col mb-3">
                                                    <p class="modal-title text-uppercase fw-bold mb-1">Order No.</p>
                                                    <p>GB5AG</p>
                                                </div>
                                            </div>
                                            <h5 class="modal-title text-uppercase mb-3" id="exampleModalLabel">
                                                <?php
                                   echo  $_POST['fname'] . " " .$_POST['lname'];
                                    ?></h5>
                                            </h5>
                                            <h4 class="mb-3" style="color: #35558a;">Thanks for your order</h4>
                                            <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                            <hr class="mt-2 mb-4"
                                                style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                                            <div class="d-flex justify-content-between">
                                                <p class="fw-bold">Total</p>
                                                <p class="fw-bold" style="color: #35558a;">₹
                                                    <?php echo $_SESSION['subtotal1']; ?></p>
                                            </div>
                                            <hr class="mt-2 mb-4"
                                                style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-bold">STATUS</p>
                                                <p class="fw-bold" style="color: #35558a;">PREPARING..</p>
                                            </div>
                                        </div>

                                        <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                                            <button type="button" class="btn btn-primary btn-lg mb-1"
                                                style="background-color: #35558a;">
                                                <a href="./index.php" style="text-decoration:none;color:white;">BACK
                                                    TO
                                                    HOME</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endif;?>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <script src="./tinymce.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <script src="./main.js"></script>
    <?php include('./footer.php') ?>

</body>

</html>
<?php 
$fname= $_POST['fname'];
 $fname;?>
<?php $lname= $_POST['lname'];
$lname;?>
<?php $email= $_POST['email'];
 $email;?>
<?php $mode= $_POST['upi'];
 $mode;?>
<?php $sem= $_POST['sem'];
 $sem;?>
<?php $usn= $_POST['usn'];
 $usn;?>
<?php $_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];?>
<?php
checkoutdb($fname,$lname,$usn,$email,$sem,$mode);
?>