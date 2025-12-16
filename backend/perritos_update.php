<?php
include("conexion.php");
$id     = $_POST['id'];
$estado = $_POST['estado'];
$conn->query("UPDATE perritos SET estado='$estado' WHERE id=$id");
echo "Perrito actualizado";
?>