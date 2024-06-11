<?php
error_reporting(E_ERROR | E_PARSE);

session_start();

if (isset($_SESSION["usuario_nombre"]) && isset($_SESSION["usuario_tipo"]) && $_SESSION["usuario_nombre"] != "" && $_SESSION["usuario_tipo"] == "vendedor") {
  header('Location:../tienda.php');

  exit;
} else {
  include("head.php");
  include('nav.php');
  echo '<section class="container">Los datos introducidos no son correctos, vuelve a intentarlo</a>.</section>';
  include('footer.php');
}
