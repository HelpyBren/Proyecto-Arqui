<?php
include("conexion.php");
$correo = $_POST['correo'] ?? '';
$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$res = $conn->query($sql);
if ($res->num_rows > 0) echo "Login correcto"; else echo "Usuario no encontrado";
?>