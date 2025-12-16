<?php include("../backend/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Adopción de Perritos</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
<nav>
<a href="index.php">Inicio</a>
<a href="login.html">Login</a>
<a href="registro.html">Registro</a>
</nav>
</header>

<div class="container">
<h1>🐶 Perritos en Adopción</h1>

<?php
$result = $conn->query("SELECT * FROM perritos");
while ($row = $result->fetch_assoc()) {
?>
<div class="card">
<h2><?php echo $row['nombre']; ?></h2>
<p>Edad: <?php echo $row['edad']; ?> años</p>
<p>Raza: <?php echo $row['raza']; ?></p>
<p>Estado: <?php echo $row['estado']; ?></p>

<?php if ($row['estado'] === 'disponible') { ?>
<form action="../backend/adoptar.php" method="POST">
<input type="hidden" name="perro_id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="usuario_id" value="2">
<button>Adoptar</button>
</form>
<?php } ?>
</div>
<?php } ?>
</div>

</body>
</html>