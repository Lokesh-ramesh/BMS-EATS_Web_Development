<?php

function hotels($hid,$hotel_name,$hotel_image){
  $hotelimage = "." . "/" ."photos". "/" .$hotel_image;
 echo "
  <form action=\"KAAPI KUTEERA.php\" method=\"post\">
<button type=\"submit\" name=\"add\"class=\"hotel\">

     <div class=\"products\">
        <img src=\"$hotelimage.jpg\">
        <div class=\"content\">
      <h2>$hotel_name</h2>
        </div>
        <input type='hidden' name='hotel_id' value='$hid'>
    </div>
</button>
</form>";
}
?>