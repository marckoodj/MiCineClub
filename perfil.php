<?php
include 'includes/session.php';
include 'includes/conexion.php';
verificarSesion();

$usuario = $_SESSION["usuario"];
$sql = "SELECT nombre, nivel FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->bind_result($nombre, $nivel);
$stmt->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Perfil - MiCineClub</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container">
    <h2>Perfil de Usuario</h2>
    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Nivel:</strong> <?php echo $nivel; ?></p>
    <a href="dashboard.php" class="btn">Volver</a>
  </div>
</body>
</html>
