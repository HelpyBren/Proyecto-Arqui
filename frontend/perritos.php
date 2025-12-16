<?php include("../backend/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Perritos</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
<nav>
<a href="dashboard.php">Dashboard</a>
<a href="perrito_form.html">Agregar Perrito</a>
</nav>
</header>

<div class="container">
<h1>Listado de Perritos</h1>
<?php
$res = $conn->query("SELECT * FROM perritos");
while ($p = $res->fetch_assoc()) {
?>
<div class="card">
<h2><?php echo $p['nombre']; ?></h2>
<p>Edad: <?php echo $p['edad']; ?></p>
<div class="actions">
<form action="../backend/perritos_delete.php" method="POST">
<input type="hidden" name="id" value="<?php echo $p['id']; ?>">
<button>Eliminar</button>
</form>
</div>
</div>
<?php } ?>
</div>
</body>
</html>