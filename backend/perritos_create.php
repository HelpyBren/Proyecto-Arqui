<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$edad   = $_POST['edad'];
$raza   = $_POST['raza'];
$conn->query("INSERT INTO perritos (nombre, edad, raza) VALUES ('$nombre',$edad,'$raza')");
echo "Perrito creado";
?>