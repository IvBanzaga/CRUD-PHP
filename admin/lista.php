<?php
include('../includes/conexion.php');
include('includes/head.php');
include('includes/navexit.php');

?>
<main>
    <?php
    include('includes/bd/tabla_lista.php');
    ?>

    <?php
    include("includes/bd/formulario_lista.php");
    ?>

    <?php
    include("includes/footer.php");
    ?>
</main>