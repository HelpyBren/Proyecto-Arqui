<?php
$host = "db";
$user = "root";
$pass = "root";
$db   = "adopcion";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>