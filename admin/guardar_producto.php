<?php
if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"])) {
    exit("Faltan datos");
}
include("../includes/funciones.php");

// obtener los datos del formulario
$id_producto = isset($_POST["id_producto"]) ? $_POST["id_producto"] : null;
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

// verificar si se cargó una imagen
if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
    // obtener información de la imagen
    $nombre_archivo = $_FILES["imagen"]["name"];
    $ruta_temporal = $_FILES["imagen"]["tmp_name"];
    $tipo_archivo = $_FILES["imagen"]["type"];

    // mover la imagen a la carpeta destino
    if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/png") {
        move_uploaded_file($ruta_temporal, "../img/" . $nombre_archivo);
    }

    // guardar el producto con la imagen
    if ($id_producto) {
        actualizarProducto($id_producto, $nombre, $precio, $descripcion, $nombre_archivo);
    } else {
        guardarProducto($nombre, $precio, $descripcion, $nombre_archivo);
    }
} else {
    // guardar el producto sin la imagen
    if ($id_producto) {
        actualizarProducto($id_producto, $nombre, $precio, $descripcion, "");
    } else {
        guardarProducto($nombre, $precio, $descripcion, "");
    }
}

header("Location: productos.php");
