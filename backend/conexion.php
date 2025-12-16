<?php
$host = "db";
$user = "root";
$pass = "root";
$db   = "adopcion";

$intentos = 10;

while ($intentos > 0) {
    $conn = @new mysqli($host, $user, $pass, $db);

    if (!$conn->connect_error) {
        break;
    }

    $intentos--;
    sleep(2);
}

if ($conn->connect_error) {
    die("Error de conexión con la base de datos");
}
?>
