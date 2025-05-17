<?php
include 'includes/conexion.php';
include 'includes/funciones.php';
include 'includes/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    if (loginUsuario($usuario, $clave, $conexion)) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - MiCineClub</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="formulario">
    <h2>Iniciar Sesión</h2>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="usuario" placeholder="Usuario" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
