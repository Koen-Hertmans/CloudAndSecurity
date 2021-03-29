<?php
$_INCLUDED = true;

include("mysql_connect.php");

$headers = getallheaders();

// prepare and bind
$stmt = $conn->prepare("INSERT INTO ESP32 (device_id, temperature, humidity, pressure, altitude) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $headers["device_id"], $headers["temperature"], $headers["humidity"], $headers["pressure"], $headers["altitude"]);

$stmt->execute();



    file_put_contents('error.txt', $stmt->error);




?>
