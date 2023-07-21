<!doctype html>
<html lang="en">
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if($_SESSION['username'])
{
    unset($_SESSION["username"]);
}
?>

<head>
    <style>
    html{
        width: 100%;
        height: 100%;}
    body {
        width: 100%;
        min-height: 100%;
        padding: 0px;
        background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 50%, rgba(0,123,255,1) 100%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
        background-repeat:no-repeat
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>LOGIN</title>
</head>

<body>
    
    <div class="container" style="padding-top:10vw;width:50vw">
        <h1 style="text-align: center;width: max-content;margin: auto;font-size:50px ">BMS-EATS</h1>
        <div class="col-sm-8 ml-auto mr-auto">
            <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill"
                        href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a>
                </li>
                <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup"
                        role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-signin" role="tabpanel"
                    aria-labelledby="pills-signin-tab">
                    <div class="col-sm-12 border border-primary shadow rounded pt-2">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="type" value="login">
                            <div class="form-group">
                                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter valid email" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="***********">
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>

                        </form>
                        <div class="form-group">
                            <a href="./login-admin.php" style="text-decoration:none;"><button
                                    class="btn btn-block btn-primary">Admin-login</button></a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="col-sm-12 border border-primary shadow rounded pt-2">
                            <input type="hidden" name="type" value="register">
                            <div class="form-group">
                                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="signupemail" class="form-control"
                                    placeholder="Enter valid email" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                <input type="text" name="mob" id="signupphone" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                <input type="password" name="passwordnew" id="signuppassword" class="form-control"
                                    placeholder="*****" pattern="^\S{5,}$"
                                    onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 5 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Register</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
   
    <?php
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $type = $_POST['type'];
      if ($type == 'register') {
        $name = $_POST['email'];
        $mob = $_POST['mob'];
        $password = $_POST['passwordnew'];
        $q = " select * from users where username = '$name'";
        $result = mysqli_query($con, $q);
        if (mysqli_num_rows($result) == 1) {
          echo '<script>alert("USER ALREADY EXISTS")</script>';
        } else {
          $i = " insert into users values('$name','$mob','$password','')";
          mysqli_query($con, $i);
          echo '<script>alert("REGISTRATION SUCCESFULL")</script>';
        }
      } else if ($type == 'login') {
        $name = $_POST['email'];
        $pass = $_POST['password'];
        $q = " select * from users where username = '$name' and password = '$pass'";
        $res = mysqli_query($con, $q);

        if (mysqli_num_rows($res) == 0) {
          echo '<script>alert("INVALID CREDENTIALS")</script>';
        } else {
          $_SESSION['username'] = $name;
         // echo '<script>alert("LOGGED IN SUCCESFULLY")</script>';
       //header('location:index.php');
         echo "<script>window.location = 'index.php'</script>";
        }
      }
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>


</html>