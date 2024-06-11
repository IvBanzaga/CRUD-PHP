<?php
session_start();
?>

<body>
    <div class="container-fluid">
        <div class="cabecera">Lista de usuarios</div>
        <div class="contenido">
            <div class="tabla">
                <?php echo $tabla; ?><br><br><br>
                <p>
                    <a class="btn btn-warning mb-3 mb-lg-0" href="./registrar.php">Registrar</a>
                </p>
            </div>

        </div>
    </div>
</body>

</html>