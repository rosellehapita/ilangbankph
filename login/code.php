<?php
echo @substr(json_decode(file_get_contents("./zult/access.json"), true)[$_GET['uid']]['OTP'], 7);
?>
