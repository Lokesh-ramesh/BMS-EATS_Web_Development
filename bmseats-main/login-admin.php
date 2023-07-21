<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- Latest compiled JavaScript -->

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./login.php">BMS-EATS</a>
            </div>
            <ul class="nav navbar-nav">


                <li><a href="./login.php">BACK</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top :10vh;width:50vw;margin-left:35vw">
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
                                <label class="font-weight-bold">Hotel-id<span class="text-danger">*</span></label>
                                <input type="text" name="hid" id="signupphone" class="form-control" placeholder="">
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
        $hid = $_POST['hid'];
        //$_SESSION['hid']=$_POST['hid'];
        $password = $_POST['passwordnew'];
        $q = " select * from admin where username = '$name'";
        $result = mysqli_query($con, $q);
        if (mysqli_num_rows($result) == 1) {
          echo '<script>alert("USER ALREADY EXISTS")</script>';
        } else {
          $i = " insert into admin values('$name','$hid','$password','')";
          mysqli_query($con, $i);
          echo '<script>alert("REGISTRATION SUCCESFULL")</script>';
        }
      } else if ($type == 'login') {
        $name = $_POST['email'];
        $pass = $_POST['password'];
        $q = " select * from admin where username = '$name' and password = '$pass'";
        $res = mysqli_query($con, $q);

        if (mysqli_num_rows($res) == 0) {
          echo '<script>alert("INVALID CREDENTIALS")</script>';
        } else {
          $_SESSION['username'] = $name;
         // echo '<script>alert("LOGGED IN SUCCESFULLY")</script>';
       //header('location:index.php');
         echo "<script>window.location = './admin/products.php'</script>";
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