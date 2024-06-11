<?php
include("includes/headtienda.php");
include("includes/navtienda.php");
include("../includes/funciones.php");

if (!isset($_GET['id_producto'])) {
    die('No se proporcionó el ID del producto');
}

$id_producto = $_GET['id_producto']; // Obtén el ID del producto de la URL
$producto = get_producto($id_producto); // Carga los datos del productoto
?>
<div class="columns">
    <div class="column is-one-third">
        <h2 class="is-size-2">Modificar producto</h2>
        <form action="guardar_producto.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_producto" value="<?php echo $id_producto; ?>"> <!-- Campo oculto para el ID del producto -->
            <div class="field">
                <label for="nombre">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre" value="<?php echo htmlspecialchars($producto->nombre); ?>">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required><?php echo htmlspecialchars($producto->descripcion); ?></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio" value="<?php echo htmlspecialchars($producto->precio); ?>">
                </div>
            </div>
            <div class="field">
                <label for="img">Imagen</label>
                <div class="control">
                    <input required id="img" name="imagen" class="input" type="file" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success">Modificar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>