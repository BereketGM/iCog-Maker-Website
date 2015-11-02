<?PHP
require_once("./include/membersite_config.php");

if (isset($_POST['submitted'])) {
    if (isset ($_POST['senderForm']) and $_POST['senderForm'] == 'register') {

        if ($fgmembersite->RegisterUser()) {
            $fgmembersite->RedirectToURL("thank-you.html");
        }
    } else if (isset ($_POST['senderForm']) and $_POST['senderForm'] == 'login') {
        if ($fgmembersite->Login()) {
            $fgmembersite->RedirectToURL("login-home.php");
        }
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Iron Rush - Contact Page</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <link href="css/tooplate_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css"/>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css"/>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css"/>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>


    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen"/>
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
        $(function () {
            $('#map a').lightBox();
        });
    </script>

</head>
<body>
<div id="tooplate_body_wrapper">
    <div id="tooplate_wrapper">
        <div id="tooplate_top_bar">
            <a class="social_btn twitter">&nbsp;</a>
            <a class="social_btn facebook">&nbsp;</a>
        </div>

        <div id="tooplate_header">
            <div id="site_title"><h1><a href="#">Iron Rush</a></h1></div>
            <div id="tooplate_menu">
                <ul>
                    <li><a href="index.html" class="current">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="blog.php">News</a></li>
                    <li><a href="gallery.php">Forum</a></li>
                    <li><a href="contact.php">Registration</a></li>
                </ul>
            </div>
            <!-- end of tooplate_menu -->
        </div>
        <!-- end of forever header -->

        <div id="tooplate_middle_subpage">
            <h2>Registration</h2>

            <p>iCog-Makers soccer Competition is open to all at any time.</p>
        </div>
        <!-- end of middle -->
        <iframe  src="https://docs.google.com/forms/d/1MhjCOu77rSv2RfVv0lsIYoCAWKRlAqdpeTzaLKOPQHE/viewform?embedded=true" width="750" height="650" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

        <div style="display: inline-block; width: 200px; height: 200px">
            <div id='fg_membersite'>
                <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post'
                      accept-charset='UTF-8'>
                    <fieldset style="display: inline">
                        <legend>Register</legend>

                        <input type='hidden' name='submitted' id='submitted' value='1'/>
                        <input type='hidden' name='senderForm' id='senderForm' value='register'/>

                        <div class='short_explanation'>* required fields</div>
                        <input type='text' class='spmhidip'
                               name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>'/>

                        <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                        <div class='container'>
                            <label for='name'>Your Full Name*: </label><br/>
                            <input type='text' name='name' id='name'
                                   value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50"/><br/>
                            <span id='register_name_errorloc' class='error'></span>
                        </div>
                        <div class='container'>
                            <label for='email'>Email Address*:</label><br/>
                            <input type='text' name='email' id='email'
                                   value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50"/><br/>
                            <span id='register_email_errorloc' class='error'></span>
                        </div>
                        <div class='container'>
                            <label for='username'>UserName*:</label><br/>
                            <input type='text' name='username' id='username'
                                   value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50"/><br/>
                            <span id='register_username_errorloc' class='error'></span>
                        </div>
                        <div class='container' style='height:80px;'>
                            <label for='password'>Password*:</label><br/>

                            <div class='pwdwidgetdiv' id='thepwddiv'></div>
                            <noscript>
                                <input type='password' name='password' id='password' maxlength="50"/>
                            </noscript>
                            <div id='register_password_errorloc' class='error' style='clear:both'></div>
                        </div>

                        <div class='container'>
                            <input type='submit' name='Submit' value='Submit'/>
                        </div>

                    </fieldset>
                    <script type='text/javascript'>
                        // <![CDATA[
                        var pwdwidget = new PasswordWidget('thepwddiv', 'password');
                        pwdwidget.MakePWDWidget();

                        var frmvalidator_register = new Validator("register");
                        frmvalidator_register.EnableOnPageErrorDisplay();
                        frmvalidator_register.EnableMsgsTogether();
                        frmvalidator_register.addValidation("name", "req", "Please provide your name");

                        frmvalidator_register.addValidation("email", "req", "Please provide your email address");

                        frmvalidator_register.addValidation("email", "email", "Please provide a valid email address");

                        frmvalidator_register.addValidation("username", "req", "Please provide a username");

                        frmvalidator_register.addValidation("password", "req", "Please provide a password");

                        // ]]>
                    </script>
                </form>
            </div>
            <!-- client-side Form Validations:
            Uses the excellent form validation script from JavaScript-coder.com-->


            <!-- Form Code Start -->
            <div style="display: inline-block; width: 400px; height: 200px">
                <div id='fg_membersite'>
                    <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post'
                          accept-charset='UTF-8'>
                        <fieldset>
                            <legend>Login</legend>

                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <input type='hidden' name='senderForm' id='senderForm' value='login'/>

                            <div class='short_explanation'>* required fields</div>

                            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                            <div class='container'>
                                <label for='username'>UserName*:</label><br/>
                                <input type='text' name='username' id='username'
                                       value='<?php echo $fgmembersite->SafeDisplay('username') ?>'
                                       maxlength="50"/><br/>
                                <span id='login_username_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='password'>Password*:</label><br/>
                                <input type='password' name='password' id='password' maxlength="50"/><br/>
                                <span id='login_password_errorloc' class='error'></span>
                            </div>

                            <div class='container'>
                                <input type='submit' name='Submit' value='Submit'/>
                            </div>
                            <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
                        </fieldset>
                    </form>
                    <!-- client-side Form Validations:
                    Uses the excellent form validation script from JavaScript-coder.com-->

                    <script type='text/javascript'>
                        // <![CDATA[

                        var frmvalidator = new Validator("login");
                        frmvalidator.EnableOnPageErrorDisplay();
                        frmvalidator.EnableMsgsTogether();

                        frmvalidator.addValidation("username", "req", "Please provide your username");

                        frmvalidator.addValidation("password", "req", "Please provide the password");

                        // ]]>
                    </script>
                </div>
            </div>
</br></br></br></br>
</br>
            <!--
            Form Code End (see html-form-guide.com for more info.)
            -->

            <!--
            Form Code End (see html-form-guide.com for more info.)
            -->


            <!--
             <div id="tooplate_main">

                 <div class="col_w960">
                     <div class="col_w450 float_l">

                       <div class="col_w200 float_l">
                              <h4>Map</h4>
                             <div class="cleaner h10"></div>
                             <div id="map">
                             <a href="images/map_big.jpg" title="Map"><img width="300" height="190" src="images/map_thumb.jpg" alt="Map" /></a>
                             </div>
                             <div class="cleaner h30"></div>
                             <h4>Mailing Address</h4>
                             <h6><strong>Company Name</strong></h6>
                             142-115 Maecenas ac eros ut, <br />
                             Curabitur vehicula elit, 15540 <br />
                             Suspendisse euismod <br /><br/>
                             Phone: 010-010-5500 <br />
                             email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                       </div>
                         <div class="cleaner"></div>
                     </div>

                     <div class="col_w450 float_r">
                         <div id="contact_form">

                             <h4>Quick Contact Form</h4>

                             <form method="post" name="contact" action="#">

                                 <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                 <div class="cleaner h10"></div>

                                 <label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
                                 <div class="cleaner h10"></div>

                                 <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>
                                 <div class="cleaner h10"></div>

                                 <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                 <div class="cleaner h10"></div>

                                 <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                                 <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

                             </form>

                         </div>
                     </div>

                     <div class="cleaner"></div>
                 </div>

                 <div class="cleaner"></div> -->
            <!-- </div> end of main -->




            <div class="cleaner"></div>
        </div>
        <!-- end of forever wrapper -->
    </div>
    <!-- end of forever body wrapper -->

    <div id="tooplate_footer_wrapper">
        <div id="tooplate_footer">
            <div class="col_w200 float_l">
                <h4>Pages</h4>
                <ul class="tooplate_list">
                    <li><a href="#">iCog-Labs</a></li>
                    <li><a href="#">Hardware Documentation</a></li>
                    <li><a href="#">Software Documentation</a></li>
                    <li><a href="#">Kit-1 full spec</a></li>
                    <li><a href="#">Kit-2 full spec</a></li>
                    <li><a href="index.html">iCog-Maker</a></li>
                </ul>
            </div>
            <div class="col_w200 float_l">
                <h4>Sponsers</h4>
                <ul class="tooplate_list">
                    <li><a href="#">Wowee</a></li>
                    <li><a href="#"> Samsung </a></li>
                    <li><a href="#">Techno</a></li>
                    <li><a href="#">Ericson</a></li>
                    <!--  <li><a href="#">Fusce at dui at augue ut</a></li>
                     <li><a href="#">Nullam eget magna tellus</a></li> -->
                </ul>
            </div>
            <div class="col_w200 float_l">
                <h4>Partners</h4>
                <ul class="tooplate_list">
                    <li><a href="#">AAiT</a></li>
                    <li><a href="#">AASTU </a></li>
                    <li><a href="#">Gonder University</a></li>
                    <li><a href="#">BahirDar University</a></li>
                    <!-- <li><a href="#">Nulla luctus tempor</a></li>
                    <li><a href="#">Morbi pellentesque</a></li> -->
                </ul>
            </div>
            <div class="col_w200 float_r col_last">
                <h4>Contact Us</h4>

                Phone: +251937927047 <br/>
                Email: <a href="mailto:info@icog-labs.com">info@icog-labs.com</a></br>
                Addis Ababa Ethiopia
            </div>

            <div class="cleaner"></div>
        </div>
    </div>

    <div id="tooplate_copyright_wrapper">
        <div id="tooplate_copyright">

            Copyright © 2015 <a href="index.html">iCog-Makers</a>
        </div>
    </div>
</body>
</html>