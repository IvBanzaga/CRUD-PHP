<?php
session_start();

if (isset($_POST["login"])) {

  $nombre = htmlspecialchars($_POST['nombre']);
  $pass = htmlspecialchars($_POST['pass']);

  try {
    // Conecta con la BD
    include('conexion.php');

    // Consulta la tabla user_admin
    $sql_ua = "SELECT `nombre`, `pass` FROM `user_admin` where nombre='$nombre' and pass='$pass' ";
    $resultado_ua = mysqli_query($conexion, $sql_ua);

    if (mysqli_num_rows($resultado_ua) > 0) {
      // Inicio de sesión exitoso para el usuario_admin
      $_SESSION["usuario_tipo"] = "admin";
      $_SESSION["usuario_nombre"] = $nombre;

      header('Location:../admin/includes/logueadoadmin.php');
      exit();
    }

    // Consulta la tabla vendedor
    $sql_vend = "SELECT `nombre`, `pass` FROM `vendedor` where nombre='$nombre' and pass='$pass' ";
    $resultado_vend = mysqli_query($conexion, $sql_vend);

    if (mysqli_num_rows($resultado_vend) > 0) {
      // Inicio de sesión exitoso para el vendedor
      $_SESSION["usuario_tipo"] = "vendedor";
      $_SESSION["usuario_nombre"] = $nombre;

      header('Location:../vendedor/includes/logueadovendedor.php');
      exit();
    }

    // Credenciales inválidas, redirige a página de inicio de sesión con mensaje de error
    header('Location:../logueado.php?error=credenciales_invalidas');
    exit();

    mysqli_close($conexion);

    // Agrega esta línea para lanzar una excepción
    throw new Exception("Mensaje de error");
  } catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
  }
}
