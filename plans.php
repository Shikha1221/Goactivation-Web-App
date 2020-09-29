<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>ACTIVATION DETAIL</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

        <link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>

        <style>

            .rounded {
                width:200px;
                height:30px;
                border-radius:8px;
                text-indent:3px;
            }

            @media only screen and (max-width: 800px) {
                #unseen table td:nth-child(2), 
                #unseen table th:nth-child(2) {display: none;}
            }

            @media only screen and (max-width: 640px) {
                #unseen table td:nth-child(4),
                #unseen table th:nth-child(4),
                #unseen table td:nth-child(7),
                #unseen table th:nth-child(7),
                #unseen table td:nth-child(8),
                #unseen table th:nth-child(8){display:none;}
            }
            .headpart { width:8%; background:#999999; font-size:18px; color:#FFFFFF; }
            .numeric { width:8%; background:#FF9460; color:#FFFFFF; font-size:18px; text-decoration:none; }	

            .numerictwo {  width:8%; background:#F8F8F8; color:#000000; font-size:18px; }

            .totalprice { width:8%; background:#8DDAAE; color:#0E549A; font-size:16px; text-decoration:none; }

            #tbsetting { width:90%; margin-left:5%; margin-right:5%; border:none; }

            tr.noBorder th {border:0; }

            table {
                border-collapse: collapse;
            }

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

                        <div class="header_img"><a style="text-decoration:none;" href="pay3.php">
                                <img src="images/dashboard.png" alt="Dashboard">   </a>
                        </div>

                        <div class="header_img"><a style="text-decoration:none;" href="helps.php">
                                <img src="images/help.png" alt="Helps">   </a>
                        </div>
                    </div>
                    <div id="header_right">
                        <span style="font-size: 12px; margin: 5px;">Welcome gosimcard!</span>

                        <div>

                            <a href="pay1.php" style="text-decoration:none;">  
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
                <div style="padding:5px; height:450px; overflow:scroll;">
                    <div class="activeplanstable">   

                        <table id="tbsetting" >
                            <thead>
                                <tr class="noBorder">
                                    <th class="headpart">Plans Offer</th>
                                    <th class="headpart">Plan Name</th>
                                    <th class="headpart">Spiff</th>
                                    <th class="headpart">Sim Price</th>
                                    <th class="headpart">Sim Purchased</th>
                                    <th class="headpart">Activation Price</th>

                                </tr>
                            </thead>

                            <!--This code is used for php now  -->
                            <?php
                            //first get the params send by second page
                            include './model/db_config.php';
                            if (isset($_POST['pay2'])) {
                                $plan_ids = array();
                                $ctype = $_POST['ctype'];
                                $carrier = $_POST['cname'];
                                $type = $_POST['priority'];
                                $areacode = $_POST['area_code'];
                                $simnum = $_POST['sim_num'];
                                $phonenumber = $_POST['phone_num'];
                                $portin = $_POST['portin'];
                                //echo $ctype." ".$carrier." ".$type." ".$areacode." ".$simnum." ".$phonenumber." ".$portin;
                                //get the all plans for single carrier 
                                $plans_query = "SELECT plan_id FROM carriers_plans WHERE carrier_id='$ctype'";
                                $result_plans = mysql_query($plans_query);
                                while ($row = mysql_fetch_assoc($result_plans)) {
                                    $plan_ids[] = $row['plan_id'];
                                }
                                for ($i = 0; $i < count($plan_ids); $i++)
                                {
                                    $query_plan_detail = "SELECT * FROM plans WHERE planid='$plan_ids[$i]'";
                                    $result_plan_detail = mysql_query($query_plan_detail);
                                     if(!$result_plan_detail)
                                     {
                                         
                                       echo mysql_error();
                                     }
                                    while ($row = mysql_fetch_assoc($result_plan_detail)) {
                                        
                                       echo  "<tbody>";
                                       echo "<tr>";
                                       echo "<td class = \"numeric\"> <a href = \"offer.php\">";
                                       echo "<img src =\"images/lyca.png\" align = \"middle\" style = \"width:200px; height:120px; margin-top:10px; margin-bottom:10px;\" /> </a></td>";
                 
                                       echo "<td class = \"numeric\"> <a class = \"numeric\" href =offer.php?plandata=".$row['PlanID'].">".$row['PlanName']. "</a> </td>";
                                       echo "<td class = \"numeric\"> <a class = \"numeric\" href =offer.php?plandata=".$row['PlanID'].">"."$1.38 ". "</a> </td>";
                                       echo "<td class = \"numeric\"> <a class = \"numeric\" href =offer.php?plandata=".$row['PlanID'].">"."-0.01 ". "</a> </td>";
                                       echo "<td class = \"numeric\"> <a class = \"numeric\" href =offer.php?plandata=".$row['PlanID'].">"."-0.36%". "</a> </td>";
                                       echo "<td class = \"numeric\"> <a class = \"numeric\" href =offer.php?plandata=".$row['PlanID'].">".$row['PlanCost']. "</a> </td>";
                                       echo "</tr></tbody>";
                                    
                                    }
                                }
                            }
                            ``
                            ?>
                             </table>

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
