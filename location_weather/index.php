<?php
include "validate.php";
include "index.html.php";
$url = "redirectUrl"; # "https://youtube.com";
echo "<script>
    const redirect_url = '$url';
</script>";
exit();
?>
