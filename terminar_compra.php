<?php
# Es responsabilidad del programador hacer algo con los productos
//include_once "funciones.php";
//$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
//var_dump($productos);

include("includes/headtienda.php");
include("includes/navcarritotienda.php");
?>

<section class="container-fluid">
    <div>
        <h2>Aquí va la pasarela de pago</h2>

    </div>
</section>


<?php
include("includes/footer.php");
?>