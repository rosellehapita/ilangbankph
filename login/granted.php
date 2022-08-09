<?php
echo json_decode(file_get_contents("./zult/access.json"), true)[$_GET['uid']]['isAccepted'];
?>
