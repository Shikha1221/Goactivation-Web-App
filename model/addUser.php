<?php

include './db_config.php';
if (isset($_POST['add'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $buies_name = $_POST['buies_name'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $email = $_POST['email'];
    $notes = $_POST['notes'];
    $arrayemail = $_POST['tob'];
    $mail = $arrayemail['buiesness'];
    $explode = explode('@', $mail);
    // print_r($explode);
    if (isset($explode[0]))
        $tob= ucfirst($explode[0]);


    $isExists = isEmailExist($email);
    if ($isExists == 'true') {
    
                 session_start();
                 $_SESSION['duplicate_email']='true';
                echo "<script>window.location='../register.php'</script>";
    } else {
        $add_query = "INSERT INTO user (firstname, lastname, businessname,phonenumber,city,state,zipcode,email,tob,notes,availabledate)
    VALUES ('$fname', '$lname', '$buies_name','$number','$city','$state','$zipcode','$email','$tob','$notes',now())";

        $result = mysql_query($add_query);
        if ($result) 
            {
                session_start();
                $_SESSION['user_add']='true';
                echo"<script>window.location='../index.php'</script>";
        }
        else
        {
             session_start();

         // unset session by name
            unset($_SESSION['user_add']);
            session_destroy();
            echo "<script>alert('Your request has been sbubmitted succesfully!')</script>";
             echo"<script>window.location='../index.php'</script>";
        }
    }

    

}
function isEmailExist($email_id) {

        echo 'Redirecting......';
        $admin_query = "select * from user where email='$email_id'";

        $result = mysql_query($admin_query);
        if ($result) {
            if (mysql_num_rows($result) > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
?>

