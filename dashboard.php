<?php
include 'includes/session.php';
verificarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel - MiCineClub</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container">
    <h1>¡Hola, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Bienvenido a tu panel personalizado de MiCineClub.</p>
    <a href="perfil.php" class="btn">Ver Perfil</a>
    <a href="logout.php" class="btn">Cerrar Sesión</a>
  </div>
</body>
</html>
