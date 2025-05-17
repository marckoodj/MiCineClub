<?php
function loginUsuario($usuario, $clave, $conexion) {
    $sql = "SELECT clave FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($claveHash);
    if ($stmt->fetch() && password_verify($clave, $claveHash)) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        return true;
    }
    return false;
}
?>
