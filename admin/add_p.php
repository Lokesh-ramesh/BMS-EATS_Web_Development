<?php 
    include("config.php");
    include("products.php");
    if(isset($_POST['form_data'])) :
        $user_pid = $db->real_escape_string($_POST['pid']);
        $user_hid = $db->real_escape_string($_POST['hid']);
        $user_product_name = $db->real_escape_string($_POST['product_name']);
        $user_product_image = $db->real_escape_string($_POST['product_image']);
        $user_new_price = $db->real_escape_string($_POST['new_price']);
        $user_old_price = $db->real_escape_string($_POST['old_price']);
        echo $user_pid;
        echo $user_hid;
        echo $user_product_name;
        echo $user_product_image;
        echo $user_new_price;
        echo $user_old_price;
        echo $_POST['id'];
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
            $sql = "UPDATE products SET pid= '$user_pid',hid='$user_hid',product_name='$user_product_name',product_image='$user_product_image',new_price='$user_new_price',old_price='$user_old_price' WHERE id='$id'";
        	$con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'hotel_list');
            if ($con->query($sql) === TRUE)
            {
                echo "yes";
            }else{echo "no";}
        	$msg = "Successfully Updated Your Record";
        else:
            echo "helllo";
            $sql ="INSERT INTO `products` (`id`, `pid`, `hid`, `product_name`, `product_image`, `new_price`, `old_price`) VALUES (NULL, '$user_pid', '$user_hid', '$user_product_name', '$user_product_image', '$user_new_price', '$user_old_price')";
        	$con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'hotel_list');
            if ($con->query($sql) === TRUE)
            {
                echo "true";
            }else{ echo "invalid query";}
            $msg = "Successfully Inserted Your Record";        	
        endif;
        $_SESSION['flash_msg'] = $msg;
        echo "<script>alert('Product is already added in the cart..!')</script>";
        //echo "<script>window.location = 'products.php'</script>";
        //header("Location:products.php");
    endif;

    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM products WHERE id =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>