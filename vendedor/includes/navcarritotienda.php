<!-- ========== Start menú de navegacion ========== -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">Frontend, Backend y Full stack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <!-- <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search"> -->
            </form>
            <form class="d-flex" action="../../index.php" method="POST">
                <button class="btn btn-outline-light me-2 mb-3 mb-lg-0" type="submit">Salir</button>
            </form>
            <!-- <form class="d-flex" action="./lista.php" method="POST">
                <button class="btn btn-outline-success me-2 mb-3 mb-lg-0" type="submit">Proveedores</button>
            </form>
            <form class="d-flex" action="./productos.php" method="POST">
                <button class="btn btn-outline-light me-2 mb-3 mb-lg-0" type="submit">Productos en Stock</button>
            </form>-->

            <form class="d-flex" action="./agregar_producto.php" method="POST">
                <button class="btn btn-outline-warning mb-3 mb-lg-0" type="submit">Registro de Productos</button>&nbsp&nbsp
            </form>

            <form class="d-flex" action="./ver_carrito.php" method="POST">

                <button class="btn btn-outline-warning mb-3 mb-lg-0">
                    <a href="./ver_carrito.php" class="button is-success">
                        <strong>Ver carrito <?php
                                            include_once "funciones.php";
                                            $conteo = count(obtenerIdsDeProductosEnCarrito());
                                            if ($conteo > 0) {
                                                printf("(%d)", $conteo);
                                            }
                                            ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                    </a>
                </button>
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", () => {
                        const boton = document.querySelector(".navbar-burger");
                        const menu = document.querySelector(".navbar-menu");
                        boton.onclick = () => {
                            menu.classList.toggle("is-active");
                            boton.classList.toggle("is-active");
                        };
                    });
                </script>
                <section class="section">

            </form>

        </div>
    </div>
</nav><br>
<!-- ========== End menú de navegacion ========== -->