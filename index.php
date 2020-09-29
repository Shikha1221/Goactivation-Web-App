<?php
// Includes Login Script
session_start();
if (isset($_SESSION['username'])) {
    header("location: pay1.php");
}
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Goactivation Login</title>
                    <link href="css/comman.css" type="text/css" rel="stylesheet"  />

                    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"  />

                    <link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>

                    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
                            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                            <style>
                                html, body {
                                    margin: 0px;
                                    padding: 0px;
                                }

                                user agent stylesheetdiv {
                                    display: block;
                                }
                                .becomemember {

                                }


                            </style>

<!--[if IE 8]><style type='text/css'>header{background:#000;}</style><![endif]-->
                            <!--[if expression]> HTML <![endif]-->

                            <!--[if IE 8]>
                           <style type='text/css'>header{background:#000;}</style>
                           <![endif]-->
                            <script>

                                function showDialog()
                                {
                                    $(function () {
                                        $("#dialog").dialog({
                                            modal: true,
                                            buttons: {
                                                Ok: function () {
                                                    $(this).dialog("close");
                                                }
                                            }
                                        });
                                    });
                                }
                            </script>
                            </head>
                            <body style="height:99.5%">

                                <div class="header">
                                    <div class="header-content">  <!--header content  -->
                                        <div class="contentheader">
                                            <div class="header-logo">                          <!-- Logo possion -->
                                                <img src="images/Goactivationlargelogo.png" class="logosize" /></div>
                                            <div class="content-login-form"> 
                                                <form action="model/login_check.php" method="POST">
                                                    <h1 class="logintitle">
                                                        Log In</h1>
                                                    <input type="text" name="username" id="input-password" class="rounded" placeholder="Username" 
                                                           style="margin-bottom:2px; width:75%; height: 30px; margin-left:10%; margin-right:10%; font-size:20px; 
                                                           font-family:Verdana, Arial, Helvetica, sans-serif"/>
                                                    <br></br>
                                                    <input type="password" name="password" id="input-password" class="rounded" placeholder="Password" 
                                                           style="margin-bottom:2px; width:75%; height:30px; margin-left:10%; margin-right:10%; font-size:20px; 
                                                           font-family:Verdana, Arial, Helvetica, sans-serif"/>
                                                    <br></br>

                                                    <input type="checkbox" name="remember me" value="Keep me logged in" style="margin-bottom:0px; 
                                                           font-size:16px; margin-left:10%;"> &nbsp; Keep me login<br></br>

                                                        <center>
                                                            <label id="error_message" style="color: #FF0000;font-size: medium">
                                                                <?php
                                                                $i = 0;
                                                                if (isset($_SESSION['error'])) {
                                                                    $i++;
                                                                    if ($i == 1) {
                                                                        echo $_SESSION['error'];
                                                                        session_destroy();
                                                                    }
                                                                }
                                                                if (isset($_SESSION['duplicate_email'])) {
                                                                    $i++;
                                                                    if ($i == 1) {
                                                                        echo '<script type="text/javascript">
                                                                                                   alert("Your request has been submitted");
                                                                                                     </script>';
                                                                        session_destroy();
                                                                    }
                                                                }
                                                                ?>

                                                            </label></center>
                                                        <input  type="submit" name="login"
                                                                class="rounded" style="margin-bottom:2px; width:80%; margin-left:10%; margin-right:10%;
                                                                font-size:18pt; height:50px; background:#F0683C; color:#ffffff;" value="Log In"></input>

                                                </form>
                                                <div style="width: 100%; text-align: center; margin-top:5%;" class="becomemember">

                                                    <div style="vertical-align:central;">
                                                        <a style="text-decoration:none;" href="register.php">


                                                            <img style="width:64px;height:64px" src="images/BecomeMember.PNG" /> 
                                                            <p>Become A Dealer/Distributor</p>  </a>                            
                                                    </div>
                                                    </a>
                                                </div>

                                            </div>	

                                        </div>

                                        <!-- form Bottom design -->
                                        <br><br>
                                                <br><br>	

                                                        <div style="width:100%; text-align:center; overflow:auto;">
                                                            <a style="text-decoration:none;" href="#">
                                                                <img src="images/prodbrand.png" style="">  </a>
                                                            <br>
                                                                <br>

                                                                    </div> </div> 
                                                                    </div> 
                                                                    </div>


                                                                    <div class="footer">

                                                                        <span class="bottom_text">GoActivation 24 hours Activation Hotline &nbsp;&nbsp;&nbsp;:
                                                                            <span style="color:#FF0000"> &nbsp;1-424-488-0488</span></span><br />
                                                                        <span class="bottom_text">Sim Card Orders & Customer Service :
                                                                            <span style="color:#FF0000"> &nbsp; 1-424-488-0488  &nbsp; Call now</span></span>

                                                                        <div style="width:100%; text-align:center; margin-bottom:1%;"><p> © 2015 GOACTIVATION.COM </p> <br>

                                                                        </div>  
                                                                    </div>

                                                                   			
                                                                    </body>
                                                                    </html>