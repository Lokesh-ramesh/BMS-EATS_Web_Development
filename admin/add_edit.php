<?php 
    session_start();
    include("config.php");
    if(isset($_POST['form_data'])) :
        $user_name = $db->real_escape_string($_POST['name']);
        $user_email = $db->real_escape_string($_POST['email']);
        $user_country = $db->real_escape_string($_POST['country']);
        $user_about = $db->real_escape_string($_POST['about']);
        $date = new DateTime($db->real_escape_string($_POST['dob']));
        $user_dob = $date->format('Y-m-d');
        $user_mobile = $db->real_escape_string($_POST['mobile']);
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
        	$query = " UPDATE `users_information` SET `name`= '$user_name', `email`='$user_email',
             `country`='$user_country', `mobile`='$user_mobile' , `about`='$user_about',
             `dob`='$user_dob' WHERE id=$id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO `users_information` SET `name`= '$user_name', `email`='$user_email',
             `country`='$user_country', `mobile`='$user_mobile' , `about`='$user_about',`dob`='$user_dob'";
        	$msg = "Successfully Inserted Your Record";        	
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:index.php");
    endif;

    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM users_information WHERE id =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>