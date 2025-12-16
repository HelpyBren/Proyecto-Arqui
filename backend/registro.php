<?php
include("conexion.php");
$nombre   = $_POST['nombre'] ?? '';
$correo   = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre','$correo','$telefono')";
if ($conn->query($sql)) echo "Usuario registrado"; else echo "Error";
?>