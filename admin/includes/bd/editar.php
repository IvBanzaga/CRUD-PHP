<?php
$nlinea = !empty($_GET['id']) ? $_GET['id'] : 0;

if ($nlinea) {
    include 'conexion.php';
    $registro = "SELECT * FROM usuarios WHERE id = $nlinea;";
    $resultado = mysqli_query($conexion, $registro);
    $linea = mysqli_fetch_row($resultado);
}
