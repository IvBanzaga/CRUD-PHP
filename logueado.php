<?php
error_reporting(E_ERROR | E_PARSE);

session_start();

if (isset($_SESSION["nombre"]) && isset($_SESSION["pass"]) && $_SESSION["nombre"] != "" && $_SESSION["pass"] != "") {
  header('Location:tienda.php');
  exit;
} else {
  include("includes/head.php");
  include('includes/nav.php');
  echo '<section class="container">Los datos introducidos no son correctos, vuelve a intentarlo</a>.</section>';
  include('includes/footer.php');
}
