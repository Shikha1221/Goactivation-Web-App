               <?php
// Includes Login Script
session_start();
if(!isset($_SESSION['username'])){
header("location: index.php");

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NEW ACTIVATION WIZARD</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>

<link href="js/bootstrap.js" type="text/javascript"  />

<link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>


<style>
._hov-efect{-webkit-transition:all .2s linear;
    -moz-transition:all .2s linear;
    -o-transition:all .2s linear;
    -ms-transition:all .2s linear;
    transition:all .2s linear}

</style>


</head>
<body>
<div id="outer_div">
	<div id="main_div">
		<div id="main_header_div">
			<div class="header_div"><a style="text-decoration:none;" href="#">
				<img src="images/GoActivation.png" alt="goactivation" width="120" /></a></div>
			<div class="header_div">
				
				<div class="header_img"><a style="text-decoration:none;" href="index.php">
				<img src="images/home.png" alt="Home">  </a>
				</div>
				
				<div class="header_img"><a style="text-decoration:none;" href="pay2.php">
				<img src="images/activation.png" alt="Activation">  </a>
				</div>
				
				<div class="header_img"><a style="text-decoration:none;" href="plans.php">
				<img src="images/dashboard.png" alt="Dashboard">   </a>
				</div>
				
				<div class="header_img"><a style="text-decoration:none;" href="helps.php">
				<img src="images/help.png" alt="Helps">   </a>
				</div>
		  </div>
			<div id="header_right">
				<span style="font-size: 16px; margin-top: 5px;">Welcome <b> gosimcard! </b></span>
				
				<div>
			
					<a href="pay1.php" style="text-decoration:none;">  
					<img src="images/settings.png"
				 alt="" style="width:60px;">   </a>
					
			  </div>
				<div>
			 	<a href="model/logout.php" style="text-decoration:none">
			 	<img src="images/log_out.png" 
				alt="" style="width:50px; height:52px;">  </a>
				</div>
			</div>
		</div>
		
		<div class="middle-container">
			<div class="activation_div" style="border-bottom: 2px solid #F2F2F2;">
				<div class="activation_img"><img src="images/new-activation.png" alt="New Activation">
					<span class="heading">NEW ACTIVATION WIZARD</span>
				</div>
			</div>
			<div id="center_div_pay1">
				<div>
                                
                               
					<table border="0" width="100%" cellspacing="10" cellpadding="0" align="center">
                                            
                                            <?php
                                            include './model/db_config.php';
                                             $query="SELECT * FROM carriers where id='1'";
                                              $result=mysql_query($query);
                                              if($result)
                                              {
                                                  while( $row = mysql_fetch_assoc($result))
                                                { 
                                                      echo "<table><tr>";
                                                       echo "<td><a href=pay2.php?ctype=".$row['Id'].">"."<img src=\"images/laycone.png\"  width=\"130\" height=\"100\" border=\"0\" />
									</a></td>";
                                                }
                                              }
                                      
                                            ?>
						
					</table>
				</div>
			</div>
		</div>
		<div id="bottom_div">
			<span class="bottom_text">GoActivation 24 hours Activation Hotline &nbsp;&nbsp;&nbsp;:
			<span style="color:#FF0000"> &nbsp; 1-424-488-0488`</span></span><br />
			<span class="bottom_text">Sim Card Orders & Customer Service :
			<span style="color:#FF0000"> &nbsp; 1-424-488-0488  &nbsp; Call now</span></span>
		</div>
	</div>
</div>
</body>
</html>
