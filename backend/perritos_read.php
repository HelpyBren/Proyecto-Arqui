<?php
include("conexion.php");
$res = $conn->query("SELECT * FROM perritos");
while ($row = $res->fetch_assoc()) {
    echo $row['nombre'] . " - " . $row['estado'] . "<br>";
}
?>