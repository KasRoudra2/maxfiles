<?php
include "validate.php";
include "ip.php";
$url = "redirectUrl"; # https://youtube.com
header("Location: $url");
exit();
?>
