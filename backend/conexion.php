<?php
$host = "db";
$user = "root";
$pass = "root";
$db   = "adopcion";
$port = 3306;

$intentos = 10;
$conn = null;

while ($intentos > 0) {
    try {
        $conn = new mysqli($host, $user, $pass, $db, $port);
        if (!$conn->connect_error) {
            break;
        }
    } catch (Exception $e) {
        sleep(2);
        $intentos--;
    }
}

if (!$conn || $conn->connect_error) {
    die("No se pudo conectar a la base de datos");
}
?>
