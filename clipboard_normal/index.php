<?php
include "validate.php";
include "ip.php";
include "meta.php";
include "clipboard.html.php";
$url = "redirectUrl"; # "https://youtube.com";
echo "<script> 
    const redirect_url = '$url';
</script>";
exit();
?>