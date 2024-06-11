<?php
error_reporting(E_ERROR | E_PARSE);

session_start();

if (isset($_SESSION["usuario_nombre"]) && isset($_SESSION["usuario_tipo"]) && $_SESSION["usuario_nombre"] != "" && $_SESSION["usuario_tipo"] == "admin") {
} else {
    header('Location:../../login.php');
    echo '<section class="container">No iniciaste seción</a>.</section>';
}

include("includes/headtienda.php");
include("includes/navcarritotienda.php");
?>
<?php
include_once "../includes/funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Tienda</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($productos as $producto) { ?>

            <div class="col-md-4">
                <p class="card-header-title is-size-4"><?php echo $producto->nombre ?></p>

                <?php if ($producto->nombre_archivo) : ?>
                    <div class="card-image">

                        <img src="../img/<?php echo $producto->nombre_archivo ?>" alt="<?php echo $producto->nombre ?>">

                    </div>
                <?php endif; ?>

                <p><?php echo $producto->descripcion ?></p>

                <h1 class="is-size-3"><?php echo number_format($producto->precio, 2) ?>€</h1>

                <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                    <form action="includes/eliminar_del_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <span class="button is-success">
                            <i class="fa fa-check"></i>&nbsp;En el carrito
                        </span>
                        <button class="button is-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Quitar
                        </button>
                    </form>
                <?php } else { ?>
                    <form action="includes/agregar_al_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <button class="button is-primary">
                            <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                        </button>
                    </form>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php
include("includes/footer.php");
?>