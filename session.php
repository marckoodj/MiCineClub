<?php
session_start();
function verificarSesion() {
    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit();
    }
}
?>
