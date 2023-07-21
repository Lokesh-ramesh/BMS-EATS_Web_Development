<?php
session_start();
function checkoutdb($fname,$lname,$usn,$email,$sem,$mode){
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="insert into checkout values('$fname','$lname','$usn','$email','$sem','$mode') ";
    mysqli_query($con, $sql);
}
function getorders(){
    $h=$_SESSION['hotel_id'];
    $username=$_SESSION['username'];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="SELECT uid FROM users where username = '$username'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
  
        $sql="SELECT * FROM products,cust where  products.pid=cust.pid AND 
        cust.uid = '$uid' AND products.hid=cust.hid ";
        $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result)>0){
            return $result;
        }
}

function order($productname,$price)
    {
          echo "
          <li class=\"list-group-item d-flex justify-content-between\">
          <div>
              <h6>$productname</h6>
              <span class=\"text-muted\">Brief Description</span>
          </div>
          <span class=\"text-muted\">Rs$price</span>
      </li>";
     
    }
?>