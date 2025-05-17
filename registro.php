<?php
include 'includes/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $clave = password_hash($_POST["clave"], PASSWORD_DEFAULT);
    $nivel = $_POST["nivel"];

    $sql = "INSERT INTO usuarios (nombre, usuario, clave, nivel) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $usuario, $clave, $nivel);
    $stmt->execute();
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro - MiCineClub</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="formulario">
    <h2>Registro de Usuario</h2>
    <form method="POST">
      <input type="text" name="nombre" placeholder="Nombre completo" required>
      <input type="text" name="usuario" placeholder="Nombre de usuario" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <select name="nivel" required>
        <option value="">Selecciona tu nivel de cine</option>
        <option value="Básico">Básico</option>
        <option value="Intermedio">Intermedio</option>
        <option value="Experto">Experto</option>
      </select>
      <button type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>
