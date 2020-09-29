<?php

include './db_config.php';
if(isset($_POST['login']))

{       
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	if($username!='' && $password!='')
	{


	$admin_query = "select * from user where email='$username' AND password='$password'";

	$run = mysql_query($admin_query); 
        if($run)
        {
            
            if(mysql_num_rows($run)>0)
            {
                 session_start();
                 $_SESSION['username']=$username;
                  echo "<script>window.location='../pay1.php'</script>";
            }
            else
            {
                    session_start();
                    $_SESSION['error']='Invalid username or Password';
                    echo"<script>window.location='../index.php'</script>";
                
	
            }
            
        }
        else 
        {
                echo mysql_error();
     
        }
	
	
	
	
}   
else
{
                    session_start();
                    $_SESSION['error']='Invalid username or Password';
                    echo"<script>window.location='../index.php'</script>";
    
}
}

?>
