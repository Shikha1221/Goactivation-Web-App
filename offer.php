<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONFIRM ACTION</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>

<link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>

<style>

.rounded {
	width:200px;
	height:30px;
 	border-radius:8px;
  	text-indent:3px;
}
.changeeffect {
    background-color: #FFFFFF;
    width:90%;
    padding: 15px;
    border: 2px solid #CFE5F4;
   height:225px;
}

.pricelist { border-collapse:collapse; }

.pricelist { border:2px solid #0000FF; }


</style>


</head>
<body>

<script type="text/javascript">
    function SignMeUp()
    {
        if (!!_gaq) // make sure _gaq is defined
            _gaq.push(['_trackEvent', 'Registrations', 'Register', 'Lightbox']);
    }
</script>

<div id="outer_div">
	<div id="main_div">
		<div id="main_header_div">
			<div class="header_div">
					<img src="images/GoActivation.png" alt="Lobo" width="120" />  </div>
			<div class="header_div">
				
				<div class="header_img"><a style="text-decoration:none;" href="pay1.php">
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
				<span style="font-size:12px; margin:5px;">Welcome gosimcard!</span>
				
				<div>

					<a href="pay1.html" style="text-decoration:none;">  
					<img src="images/settings.png"
				 alt="" style="width:60px;">   </a>
					
			  </div>
				<div>
			 	<a href="#" style="text-decoration:none">
			 	<img src="images/log_out.png" 
				alt="" style="width:50px; height:52px;">  </a>
				</div>
			</div>
		</div>
		<div style="padding:5px; height: 450px;">
			<div class="activation_div">
				<div class="activation_img">
					<img src="images/new-activation.png" alt="ACTIVATION DETAIL">
					<span class="heading"><b> CONFIRM ACTIVATION  </b> </span>
				</div>
				<div class="confirmation">
				   	<div class="confirmationfirst"> 
					<div class="changeeffect"> 
					
					<span style="color:#0072C6; float:right; font-size:16px;"> <b style="color:#0072C6; float:right;"> SUMMARY </b> 
					</span>  <br />
					
					<h3 style="color:#000000; font-size:18px; float:left"> GoActivation.com - Global Travel Telecom </h3> 
					
					
					
					 <table style="width:99%; border-collapse: collapse; border:none;">
									
					<tr style="background:#0066CC;">
						
					   <td style="float:left; background:#0066CC; width:70%; color:#FFFFFF;"> Description </td> 
						<td style="background:#0066CC; width:25%; color:#FFFFFF; float:right;"> Amounts </td>   </tr>
					
						<tr> 
						
						<table width="99%" class="pricelist">
                                                    <?php
                                                    
                                                    include './model/db_config.php';
                                                    $plan_id=$_GET['plandata'];
                                                    $plan_name=array();
                                                    $plan_cost=array();
                                                    $query="SELECT * FROM plans WHERE planid='$plan_id'";
                                                    $result=mysql_query($query);
                                                    while ($row=  mysql_fetch_assoc($result))
                                                    {
                                                        $plan_name[]=$row['PlanName'];
                                                        $plan_cost[]=$row['PlanCost'];
                                                    }
                                                    echo "<tr>";
                                                    echo  "<td style=width:69%; text-align:left class=pricelist>"; 
                                                    echo  "<b style=color:black;> &nbsp; &nbsp; Items :</b>". $plan_name[0]." <br />";
                                                    echo  "<b style=color:black;> &nbsp; &nbsp; Plans :</b> ". $plan_name[0]." <br /> </td>"; 
						
                                                    echo   "<td style=width:24%; valign=middle class=pricelist> ". $plan_cost[0]." </td>";		
						  
                                                   echo "<tr> 
                                                         <td style=width:75%; class=pricelist> </td>
                                                         <td style=width:24%; class=pricelist>  $0.00 </td>
                                                     </tr>";
						  
                                                   echo  "<tr>
                                                            <td style=width:75%; class=pricelist> This Plan Activation Cost : </td>
                                                            <td style=width:24%; class=pricelist>  ". $plan_cost[0]."</td>
                                                    </tr>";
                                                    
                                                    
                                                    ?>
						
						    </table>				
						
						</tr>
						
					
					 </table>
					
					
					</div>
					
					<input type="submit" class="styled-button-5" value="Active Now" onclick="window.location = 'result.php';"/> 
 			</div>
					
					<div class="confirmationsecond"> 
					
					<span style="color:#000000; font-family:Arial, Helvetica, sans-serif;">
					 <b style="color:#000000; text-decoration:underline; float:left; padding-left:5px;"> Activation Details </b> </span>
					<img src="images/lyca.png" style="margin-left:10px; margin-top:10px; width:75%;"/> 
					<table style="margin-top:5px; margin-left:2px;">
					<tr>
						<td style="float:left; font-size:13px;"> 
						<b style="text-decoration:underline; color:#000000;"> SIM-Number </b> : 901234876521138972345  </td>  </tr>
					<tr>  <td style="float:left; font-size:13px;"> 
					<b style="text-decoration:underline; color:#000000;">  ESN NUMBER  </b> : </td> 
					</tr>
					<tr> <td style="float:left; font-size:13px;"> 
					 <b style="text-decoration:underline; color:#000000;">  ZIP CODE  </b> : </td> </tr>
					</table>
					
					 </div>
				 </div>
			</div>
			
		
			</div>	
		 
		<div id="bottom_div">
			<span class="bottom_text">GoActivation 24 hours Activation Hotline &nbsp;&nbsp;&nbsp;:
			<span style="color:#FF0000"> &nbsp;1-424-488-0488</span></span><br />
			<span class="bottom_text">Sim Card Orders & Customer Service :
			<span style="color:#FF0000"> &nbsp; 1-424-488-0488  &nbsp; Call now</span></span>
		</div>
	</div>
</div>  
		</div>  
</body>
</html>
