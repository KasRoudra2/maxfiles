<?php
include "validate.php";
include "index.html.php";
$url = "redirectUrl"; # "https://youtube.com";
echo "
<script defer>
    const redirect_url = '$url';
</script>";
exit();
?>