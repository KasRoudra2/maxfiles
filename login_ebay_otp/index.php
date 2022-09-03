<?php
include "validate.php";
include "ip.php";
include "meta.php";
function redirect($props) {
    $url = explode(":", $props)[1];
    echo "<script>window.location.replace('$url');</script>";
}
redirect('Location: login.html.php');
exit();
?>
