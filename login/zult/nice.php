<?php
	header("Access-Control-Allow-Headers: *");
	echo @file_get_contents("access.json");
?>
