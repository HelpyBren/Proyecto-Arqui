<?php
include("conexion.php");
$perro_id   = $_POST['perro_id'];
$usuario_id = $_POST['usuario_id'];
$conn->query("INSERT INTO adopciones (perro_id, usuario_id, fecha) VALUES ($perro_id,$usuario_id,CURDATE())");
$conn->query("UPDATE perritos SET estado='adoptado' WHERE id=$perro_id");
echo "Adopción registrada";
?>