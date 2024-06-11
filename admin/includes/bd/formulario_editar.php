<body>
    <div class="container">
        <div class="cabecera">Actualización de datos</div>
        <div class="contenido">
            <form class="contact" action="./actualizar.php" method='post'>
                <input type="hidden" name="nlinea" value="<?php echo $nlinea; ?>">
                <label for="i1">Nombre</label>
                <input type="text" id="i1" name="c1" value="<?php echo $linea[1]; ?>">
                <br>
                <label for="i2">Apellido</label>
                <input type="text" id="i2" name="c2" value="<?php echo $linea[2]; ?>">
                <br>
                <label for="i3">Telefono</label>
                <input type="text" id="i3" name="c3" value="<?php echo $linea[3]; ?>">
                <br>
                <label for="i4">Correo</label>
                <input type="email" id="i4" name="c4" value="<?php echo $linea[4]; ?>">
                <br><br><br>
                <input class="btn btn-warning mb-3 mb-lg-0" type="submit" value="actualizar">

            </form>
        </div>
    </div>
</body>

</html>