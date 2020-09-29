<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>ACTIVATION DETAIL</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

        <link href="css/common.css" rel="stylesheet">

            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  />

            <link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>

            <style>

                .rounded {
                    width:200px;
                    height:30px;
                    border-radius:8px;
                    text-indent:3px;
                }

                .rounded1 {	width:200px;
                            height:30px;
                            border-radius:8px;
                            text-indent:3px;
                }
                .rounded2 {	width:200px;
                            height:30px;
                            border-radius:8px;
                            text-indent:3px;
                }
                .rounded11 {
                    border-radius:8px;
                    text-indent:3px;
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
                        <img src="images/GoActivation.png" alt="goactivation" width="120" />  </div>
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
                        <span style="font-size: 16px; margin-top: 5px;">Welcome <b> gosimcard! </b> </span>

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
                <div style="padding: 5%; height: 450px;">
                    <div class="activation_div">
                        <div class="activation_img">
                            <a href="#" style="text-decoration:none">
                                <img src="images/new-activation.png" alt="ACTIVATION DETAIL" />  </a>
                            <span class="heading"><b> ACTIVATION DETAIL  </b> </span>
                        </div>
                    </div>
                    <div id="center_div_pay2">
                        <div style="width:80%; float:left;">

                            <form name="second_page" action="plans.php" method="POST">


                                <table style="margin:0px auto; margin-left:6%; width:94%;">
                                    <tr>
                                        <td><input type="hidden" value="<?php echo $_GET['ctype'] ?>" name="ctype"></input></td>
                                    </tr>
                                    <tr>


                                        <td style="padding-bottom:2%; width:25%;"><label for="firstname" style="float:left; color:#808080;
                                                                                         font-size:17px;">Carrier</label>
                                        </td>
                                        <td style="padding-bottom:5%; width:69%;">

                                            <input class="rounded2" type="text"  id="name2" placeholder="Carrier name"
                                                   autocomplete="true" tabindex="1" style="width:60%; margin-right:15%; margin-left:5%; 
                                                   font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" name="cname"  required="true"/></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:5%; width:25%;"><label  style="float:left; color:#808080;
                                                                                         font-size:17px;">Activation Type</label>
                                        </td>
                                        <td style="padding-bottom:5%; width:69%; float:left;"><span class="radiobadge">
                                                <input type="radio" id="gsm" name="priority" value="gsm" />
                                                <label for="GSM">GSM</label>
                                            </span> </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:2%; width:25%;"><label style=" float:left; color:#808080;
                                                                                         font-size:17px;"> Area Code </label>
                                        </td>
                                        <td style="padding-bottom:2%; width:69%;"><input class="rounded2" type="text" name="area_code" id="name2" placeholder=""
                                                                                         style="width:60%; margin-right:15%; margin-left:5%; 
                                                                                         font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" required="true"/></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:2%; width:25%;"><label for="firstname" style=" float:left; color:#808080;
                                                                                         font-size:17px;">SIM Number </label>
                                        </td>
                                        <td style="padding-bottom:2%; width:79%;"><input class="rounded2" type="tel" name="sim_num" id="name2" placeholder=""
                                                                                         style="width:60%; margin-right:10%;  
                                                                                         font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" required="true" pattern="[0-9]{5,}" title="Only numbers are allowed"/></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:2%; width:35%;"><label for="firstname" style="float:left; color:#808080;
                                                                                         font-size:17px;">Contact Number </label>
                                        </td>
                                        <td style="padding-bottom:2%; width:69%;"><input class="rounded2" type="tel" name="phone_num" id="name2" placeholder=""
                                                                                         style="width:60%; margin-right:10%; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" required="true" pattern="[0-9]{5,}" title="Only numbers are allowed"/></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:1%; width:34%;"><input type="checkbox" name="portin" value="port in" style="margin-bottom:2px; 
                                                                                         font-size:16px; font-size:18px;" />
                                            &nbsp;<b> Port In </b> </td>
                                        <br />
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:1%; width:34%;"><input name="pay2" type="submit"
                                                                                         class="rounded11" style="margin-bottom:2px; margin-top:2%; width:100px !important;
                                                                                         height:60px !important;background: #FF9460;color: #FFFFFF;"  value="Continue" 
                                                                                         alt="submit"   />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div> 
                        <div style="width:20%; height:305px; float:left; background:#FFFFFF;">
                            <img src="images/lyca.png" /> </div> 
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