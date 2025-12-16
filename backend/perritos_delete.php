<?php
include("conexion.php");
$id = $_POST['id'];
$conn->query("DELETE FROM perritos WHERE id=$id");
echo "Perrito eliminado";
?>