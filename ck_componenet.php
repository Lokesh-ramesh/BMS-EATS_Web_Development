<?php
function products($pid,$product_name,$product_image,$old_price,$new_price,$hid){
    $product_image = "." . "/" ."photos". "/" .$product_image;
  echo " <form action=\"product-page.php\" method=\"post\">
  <button type=\"submit\" name=\"add1\"><h2 class=\"food-name\">
    <div class=\"products\">
        <img src=\"$product_image.jpg\" class=\"food-img\" />
        <div class=\"content\">
        <h2 class=\"food-name\">$product_name</h2>      
            <hr class=\"divider_hr\" style=\"margin: auto; border-top: 1px solid black; width: 80%\" />
            <div class=\"prices\">
                <h3 class=\"op\">₹$old_price</h3>
                <h3 class=\"dp\">₹$new_price</h3>
               
                            
            </div>
        </div>
        <input type='hidden' name='product_id' value='$pid'>
        <input type='hidden' name='hotel_id' value='$hid'>
    </div>
    </button>
</form>";
}
?>