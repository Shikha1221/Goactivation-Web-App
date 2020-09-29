<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%; margin: 0px; padding: 0px; overflow: hidden;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Register User</title>

        <link href="css/registerstyle.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="images/Goactivationlargelogo.png" type="image/png"/>

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="css/bootstrap.css" type="text/css"  />
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

            <link href="css/common.css" rel="stylesheet">
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="js/respond.min.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
                    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                    <style>


                        .header { min-width:80%; margin:0px auto; height:auto;} 

                        .loginControl { width:100%;  height: 374px; background:#FFFFFF; margin:0px auto;   }

                        .content-register { padding:5px; } 

                        .loginControl h1 {
                            color: #808080;
                            margin-left:6%;
                            font-size: 20px;
                            font-weight:bold;
                        }
                        .loginControl h3 {
                            color: #808080;
                            font-size: 18px;
                        }

                        #prioritycase {
                            float: left;
                            display: block;
                            margin-left:5%;
                        }

                        #wrapping { width: 100%; box-sizing: border-box; }
                        /** @group clearfix **/
                        .clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
                        .clearfix { display: inline-block; }

                        html[xmlns] .clearfix { display: block; }
                        * html .clearfix { height: 1%; }

                        #aligned { 
                            box-sizing: border-box; 
                            float: left; 
                            width: 450px; 
                            margin-right: 50px; 
                        }	

                        textarea {
                            display: block;
                            font-family: "Helvetica Neue",Arial,sans-serif;
                            font-size: 1.5em;
                            width: 90%;
                            height: 180px;
                            color: #777;
                            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1) inset;
                            transition: border 0.15s linear 0s, box-shadow 0.15s linear 0s, color 0.15s linear 0s;
                        }	

                        .dx-vam, .dx-valm {
                            vertical-align: middle;
                        }
                        .dx-vam, .dx-vat, .dx-vab {
                            display: inline-block !important;
                        }	


                    </style>

                    
                    </head>

                    <body style="height: 100%; margin: 0px; padding: 0px; overflow: hidden;">
                        <div class="header">
                            <div class="header-content">  <!--header content  --> 
                                <div class="header-page-title">  <!-- current content possion -->
                                    <div class="header-logo-left"> 

                                        <div style="height: 160px; width: 1093px; padding: 0px; background:#F9F9F9;" id="header-logo" >

                                            <div class="headerlogo contentPage">
                                                <img src="images/latestlogo.png" id="logo-header">

                                            </div>


                                            <div id="MainSplitter_1_CC" class="dxsplLCC" >

                                                <div class="content-register">
                                                    <div class="loginControl">
                                                        <div class="loginControl-2">
                                                            <a href="" style="text-decoration:none;">
                                                                <img style="width:48px; height:48px;" src="images/activation.png">
                                                            </a>
                                                        </div> 

                                                        <!--	  Radio option Button using option button   -->




                                                        <h1 style="margin-left:6%; margin-top:1%;">&nbsp; Become a Reseller </h1> 



                                                        <div class="container" style="position:relative;">
                                                            <form action="model/addUser.php" method="post">
                                                                <table class="registerform"> 

                                                                    <tr> <td style="padding-bottom:1%; width:auto;">


                                                                            <label for="firstname" class="titlename">First Name</label> </td>

                                                                        <td style="padding-bottom:1%; width:auto;"><input type="text" name="fname" id="name2" placeholder="First name"
                                                                                                                          autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[A-Za-z]{1,}" title="letters only"/></td> 
                                                                    </tr>

                                                                    <tr> 

                                                                        <td style="padding-bottom:1%;"> <label for="lname" class="titlename">Last Name</label> </td>

                                                                        <td style="padding-bottom:1%;"> <input type="text" name="lname" id="name" placeholder="Second name"
                                                                                                               autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[A-Za-z]{1,}" title="letters only"> </td> </tr>


                                                                    <tr> 

                                                                        <td style="padding-bottom:1%;"> <label for="businessname" class="titlename">Business Name</label> </td>

                                                                        <td style="padding-bottom:1%;"> <input type="text" name="buies_name" id="name" placeholder="Business name"
                                                                                                               autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[A-Za-z]{3,}" title="letters only"> </td> </tr>

                                                                    <tr> 

                                                                        <td style="padding-bottom:1%;"> <label for="phonenumber" class="titlename">Contact Number</label> </td>

                                                                        <td style="padding-bottom:1%;"> <input type="tel" name="number" id="number" placeholder="Phone Number To Contact" pattern="[0-9]{10}" title="Please enter only numbers"
                                                                                                               autocomplete="off" tabindex="1" class="txtinput" required="true" min="5" maxlength="20"> </td> </tr>

                                                                    <tr> 
                                                                        <td style="padding-bottom:1%;"> <label for="city" class="titlename">City</label> </td>

                                                                        <td style="padding-bottom:1%;"><input type="text" name="city" id="city" placeholder="your City Name"
                                                                                                              autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[A-Za-z]{3,}" title="letters only"/></td> 
                                                                    </tr>


                                                                    <tr> 
                                                                        <td style="padding-bottom:1%;"> <label for="state" class="titlename">State</label> </td>

                                                                        <td style="padding-bottom:1%;"> <input type="text" name="state" id="state" placeholder="your State Name"
                                                                                                               autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[A-Za-z]{1,}" title="letters only"> </td> </tr>


                                                                    <tr> 
                                                                        <td style="padding-bottom:1%;"> <label for="zipcode" class="titlename">Zip Code</label> </td>

                                                                        <td style="padding-bottom:1%;"> <input type="tel" name="zipcode" id="name" placeholder="your Zip Code Name"
                                                                                                               autocomplete="off" tabindex="1" class="txtinput" required="true" pattern="[0-9]{5,}" > </td> </tr>

                                                                    <tr> 
                                                                        <td style="padding-bottom:1%;"> <label for="email" class="titlename">Email</label> </td>

                                                                        <td style="padding-bottom:1%;"><input type="email" name="email" id="email" placeholder="your Email ID Enter Here"
                                                                                                              autocomplete="off" tabindex="1" class="txtinput" required="true"/></td> 
                                                                    </tr>

                                                                    <tr> 
                                                                        <td style="padding-bottom:1%;"> <label for="typeofbusiness" class="titlename"> Type Of Business</label> </td> 

                                                                        <td style="padding-bottom:1%; "><select id="select_1" class="placeholder" name="tob[buiesness]" size="1" required
                                                                                                                >
                                                                                <option value="" style="color: #808080; font-size: 18px;">Please Select</option>
                                                                                <option value="Wireless Store" style="color: #808080; font-size: 18px;">Wireless Store</option>
                                                                                <option value="Conveninece Store" style="color: #808080; font-size: 18px;">Conveninece Store</option>
                                                                                <option value="Individual Seller " style="color: #808080; font-size: 18px;">Individual Seller </option>
                                                                                <option value="Gas Station" style="color: #808080; font-size: 18px;">Gas Station</option>
                                                                                <option value="Other" style="color: #808080; font-size: 18px;">Other</option>
                                                                            </select></td>
                                                                        <tr> 
                                                                            <td style="padding-bottom:1%;"> <label for="note" class="titlename"> Notes </label> </td> 

                                                                            <td style="padding-bottom:1%; ">   <textarea name="notes" id="message" placeholder="Enter a cool message..." tabindex="5" 
                                                                                                                         class="txtblock" style="width:45%;" required="true" ></textarea> </td> </tr>

                                                                        <tr>  <td style="padding-bottom:1%; height:40px;"> <input type="submit"  class="dx-vam" style="width:100px; height:100%; margin-left:10%; background:#F67D3A; color: rgb(255, 255, 255); font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;"  name="add" id="submitbtn"  value="Submit"> </td> 
                                                                        </tr>
                                                                </table>
                                                            </form>

                                                        </div>



                                                    </div>			



                                                </div> </div>  

                                            <?php
                                            session_start();
                                            $i = 0;
                                            
                                            if (isset($_SESSION['duplicate_email'])) 
                                                {
                                                echo '<h1>loaldk</h1>';
                                                $i++;
                                                if ($i == 1) {
                                                    echo '<script type="text/javascript">
                                                                                                    alert("Email already exists.Please");
                                                                                                     </script>';
                                                    session_destroy();
                                                }
                                            }
                                            ?>

                                            <!-- footer page -->

                                            <table class="dxsplControl_SoftOrange" id="MainSplitter" >
                                                <tbody><tr>
                                                        <td id="MainSplitter_0" class="dxsplPane_SoftOrange headerPane" style="border-width: 0px 0px 1px; vertical-align: top; width: 1093px; height: 179px;"><div id="MainSplitter_0_CC" class="dxsplLCC" style="height: 179px; width: 1093px; padding: 0px;">

                                                                <p class="footercontact"> <b> GOActivation 24 hours Activation Hotline : 1-424-488-0488 </b> </p>

                                                                <p class="footercontact"> <b>Sim Card Orders & Customer Service :  1-424-488-0488 </b>  </p>


                                                            </div> </td> </tr> </tbody> </table> </div>



                                    </div> </div>


                            </div> </div> 

                               
                    </body>
                    </html>
