<?php 
    include("config.php");
    if(isset($_POST['form_data'])) :
        $user_hotel_name = $db->real_escape_string($_POST['hotel_name']);
        $user_hotel_image = $db->real_escape_string($_POST['hotel_image']);
        echo $user_hotel_name;
        echo $user_hotel_image;
        echo $_POST['id'];
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
            $sql = "UPDATE hotels SET hotel_name='$user_hotel_name',hotel_image='$user_hotel_image' WHERE hid='$id'";
        	$con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'hotel_list');
            if ($con->query($sql) === TRUE)
            {
                echo "yes";
            }else{echo "no";}
        	$msg = "Successfully Updated Your Record";
        else:
            $sql ="INSERT INTO `hotels` (`hotel_name`, `hotel_image`) VALUES ('$user_hotel_name', '$user_hotel_image')";
        	$con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'hotel_list');
            if ($con->query($sql) === TRUE)
            {
                echo "true";
            }else{ echo "invalid query";}
            $msg = "Successfully Inserted Your Record";        	
        endif;
        $_SESSION['flash_msg'] = $msg;
        echo "<script>window.location = 'hotels.php'</script>";
        //header("Location:hotels.php");
    endif;

    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM hotels WHERE hid =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>