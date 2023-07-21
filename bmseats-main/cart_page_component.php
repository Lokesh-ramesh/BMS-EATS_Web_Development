<?php
   $_SESSION['subtotal1']=0;
   $_SESSION['subtotal2']=0;
function addtocart($pid,$product_name,$product_image,$old_price,$new_price,$qty,$hid){
    $product_image = "." . "/" ."photos". "/" .$product_image;
    $total1 = (int)($qty * $new_price);
    $total2=(int)($qty * $old_price);
   
    $_SESSION['subtotal1']+=$total1;
    $_SESSION['subtotal2']+=$total2;
 
    echo " 
    <li class=\"item\">
    <form action=\"cart_page.php?action=remove&id=$pid\" method=\"post\" class=\"cart-items\">
    <div class=\"item-main cf\">
        <div class=\"item-block ib-info cf\">
            <img class=\"product-img\" style=\"height:75px\" src=\"$product_image.jpg\" />
            <div class=\"ib-info-meta\">
                <span class=\"title\">$product_name</span>
            </div>
        </div>
        <div class=\"col-lg-2\" style=\"width: 200px;\">
            <div class=\"buts input-group\" style=\"display: flex; flex-wrap: nowrap;\">
                
                <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control input-number\" onchange=\"upd($pid,event,$hid)\"
                    style=\"width: 35px;\" value=\"$qty\" min=\"1\" max=\"5\" />
               
                <input type=\"hidden\" value = \"$pid\" name=\"product_id\"></input>
                <input type=\"hidden\" value = \"$hid\" name=\"hotel_id\"></input>
                <input type=\"hidden\" value = \"$subtotal\" name=\"subtotal\"></input>
                <button type=\"submit\" class=\"quantity-delete btn btn-danger btn-number\" name=\"remove\"
                    style=\"margin-left: 20px;border-radius:4px;width:auto;\" data-type=\"plus\" data-field=\"\">
                    <span class=\"glyphicon glyphicon-trash\"></span>
                </button>
            </div>
            <div>
            <span class=\"price\" style=\" text-decoration: line-through;\"><span></span> ₹$old_price/plate</span>
            <span class=\"price\"><span></span> ₹$new_price/plate</span>
        </div>
        </div>
        
        <div class=\"item-block ib-total-price\">
        <span class=\"tp-price\">₹$total1</span>
        <span class=\"tp-remove\"><i class=\"i-cancel-circle\"></i></span>
    </div>
    </div>
</form>

</li>";
header('Location: '.$_SERVER['PHP_SELF']);
}
function putval($pid,$qty,$hid)
{
    $con = mysqli_connect('localhost', 'root', '');
    //echo $hid;
    mysqli_select_db($con, 'hotel_list');
    $name = $_SESSION['username'];
    $sql="SELECT uid FROM users where username = '$name'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
    $sql="insert into cust values('$uid','$pid','$qty','$hid') ";
    mysqli_query($con, $sql);
}
function remove($pid,$hid)
{
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="DELETE FROM cust WHERE pid='$pid' AND hid='$hid';";
    mysqli_query($con, $sql);
}
function update($qty,$pid)
{
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="UPDATE cust set quantity = '$qty' WHERE pid='$pid';";
    mysqli_query($con, $sql);
}
function bill($old,$new)
{
    
}
?>